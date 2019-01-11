<?php

namespace App\Admin\Controllers;

use App\Models\Weekly_list;
use App\Models\Weekly;
use App\Models\Week_task_agent;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Grid;
use Encore\Admin\Form;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Collection;
use App\Admin\Extensions\Tools\IsCreate;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Tab;
use Encore\Admin\Widgets\Table;
use Illuminate\Http\Request;



class WeeklyController extends Controller
{
    public function index(Content $content)
    {
        // 选填
        $content->header('周报');
        // 选填
        $content->description('周报列表');
        // 添加面包屑导航 since v1.5.7
        $content->breadcrumb(
            ['text' => '首页', 'url' => '/'],
            ['text' => '周报', 'url' => '/weekly'],
            ['text' => '周报列表']
        );
        // 填充页面body部分，这里可以填入任何可被渲染的对象
        $content->body($this->grid());
        // 在body中添加另一段内容
        $content->body('foo bar');
        // `row`是`body`方法的别名
        $content->row('hello world');
        return $content;
    }

    /**
     * Show interface.
     *  
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        $week_no=$this->getweek_no();
            return $content
            ->header('第'.$week_no.'周总结周报')
            ->description('详情页面')
            ->body($this->detail($id));
    }

    public function update($id)
    {
        return $this->form()->update($id);
    }

    /**
     * Edit interface.
     *修改的表头
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        $week_no=$this->getweek_no();
        $userid=Admin::user()->id;
        $weekly_list=Weekly_list::where('id',$id)->get()->toArray();
        $weekly=Weekly::where('weekly_id',$id)->get()->toArray();
        $week_lenth=count($weekly);
        $week_task_agent=Week_task_agent::where('weekly_id',$id)->get()->toArray();
        $weekly=array_reverse($weekly);
        foreach ($weekly_list as $key => $value) {
            $weekly_list=$value;
        }
        // $week_task_agents = [];     分解任务
        // foreach ($week_task_agent as $key => $value) {
        //     $week_task_agents[$value['week_id']] = ['week_task'=>$value['week_task'],'week_agent'=>$value['week_agent']];
        // }
        return view('admin.self.update',['week_no'=>$week_no,'userid'=>$userid,'weekly_list'=>$weekly_list,'weekly'=>$weekly,'week_task_agent'=>$week_task_agent,'week_lenth'=>$week_lenth]);
        
        // return $content
        //     ->header('Edit')
        //     ->description('description')
        //     ->body($this->form()->edit($id));
    }

    //获取当前周数
    public function getweek_no()
    {
        return $week_no=date('W',time());
    }

    /**
     * Create interface.
     *添加的表头
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        $weekly_list=Weekly_list::all()->toArray();
        $week_no=$this->getweek_no();
        $userid=Admin::user()->id;
        return view('admin.self.form',['week_no'=>$week_no,'userid'=>$userid,'weekly_list'=>$weekly_list]);
            // return $content
            // ->header('新建周报')
            // ->description('第'.$week_no.'周总结周报')
            // ->body($this->auxiliary());
            // ->body($this->form());
            // ->row(function(Row $row) {
            //     // $row->column(7, $this->newCreat());
            //     $row->column(12, $this->auxiliary());
            // });
    }
    public function get_info(){
        $id=$_POST['weekly_id'];
        $weekly=Weekly::where('weekly_id',$id)->get()->toArray();
        $week_task_agent=Week_task_agent::where('weekly_id',$id)->get()->toArray();
        $weekly=array_reverse($weekly);
        foreach($week_task_agent as $key=>$value) {
            foreach($value as $k=>$v) {
            $weekly[$key][$k] = $v;
            }
        }
        return var_dump($weekly);
    }
    // public function newCreat(){
    //     $week_no=$this->getweek_no();
    //     $userid=Admin::user()->id;
    //     return view('admin.self.additem',['week_no'=>$week_no,'userid'=>$userid]);
    // }
    public function auxiliary(){
        $week_no=$this->getweek_no();
        $userid=Admin::user()->id;
        return view('admin.self.form',['week_no'=>$week_no,'userid'=>$userid]);
    }

    // 新增
    public function add(){
        $post = $_POST;
        $weekly_arr = [];
        $task_agent_arr = [];

        //周报入库
        $list_res=$this->add_list();
        $weekly_id['weekly_id']=$list_res['weekly_id'];
        $time=date('Y-m-d H:i:s');
        $weekly_id['created_at']=$time;
        $weekly_id['updated_at']=$time;

        if (!empty($post['week_work_new'])) {
            foreach($post['week_work_new'] as $key => $val){
                $weekly_arr[$key] = [
                        'week_id' => $key,
                        'week_work' => $val,
                        'week_results' => $post['week_results_new'][$key],
                    ];
                if (!empty($post['week_task_new'][$key])) {
                    foreach($post['week_task_new'][$key] as $task_key => $task_val){
                        $task_agent_arr[]= [
                            'week_id' => $key,
                            'week_task' => $task_val,
                            'week_agent' => $post['week_agents_new'][$key][$task_key]
                        ];
                    }
                }
            }
            //分解入库
            $task_agent_res=$this->add_task_agent($task_agent_arr,$weekly_id);
        }
        array_walk($weekly_arr, function (&$value, $key, $weekly_id) {
                            $value = array_merge($value, $weekly_id);
                        }, $weekly_id);
        //任务入库
        $weekly_res=$this->add_weekly($weekly_arr);
        if ($list_res['message'] == $weekly_res['message'] && $task_agent_res['message']==$weekly_res['message'] && $weekly_res['message']=='success') {
            $res = array('message' => 'success','weekly_id' => $list_res['weekly_id'] );
        }
        return $res;
    }
    public function add_list(){
        $weekly_list = new Weekly_list;
        $weekly_list->week_no = $_POST['week_no']?: '';
        $weekly_list->userid = $_POST['userid']?: '';
        $weekly_list->weekly_status = $_POST['weekly_status']?: '0';
        $weekly_list->week_business = $_POST['week_business']?: '';
        $weekly_list->week_construction = $_POST['week_construction']?: '';
        $weekly_list->week_cooperation = $_POST['week_cooperation']?: '';
        $weekly_list->week_quality = $_POST['week_quality']?: '';
        $weekly_list->week_secret = $_POST['week_secret']?: '';
        $res = $weekly_list->save();
        $weekly_id = $weekly_list->id;
        $list_res = array('res' => $res,'weekly_id' => $weekly_id,'message' => 'success');
        return $list_res;
    }
    public function add_weekly($weekly_arr){
        $weekly = new Weekly;
        // $res=$weekly->insert($weekly_arr);
        $res=$weekly->insert($weekly_arr);
        $weekly_res = array('res' => $res,'message' => 'success');
        return $weekly_res;
    }
    public function add_task_agent($task_agent_arr,$weekly_id){
        $week_task_agent = new Week_task_agent;
        array_walk($task_agent_arr, function (&$value, $key, $weekly_id) {
                            $value = array_merge($value, $weekly_id);
                        }, $weekly_id);
        $res=$week_task_agent->insert($task_agent_arr);
        $week_task_agent_res = array('res' => $res,'message' => 'success');
        return $week_task_agent_res;
    }
    // 修改
        public function upd(){
        $post = $_POST;
        $weekly_arr = [];
        $task_agent_arr = [];

        //周报修改
        $list_res=$this->upd_list();
        $weekly_id['weekly_id']=$list_res['weekly_id'];
        $time=date('Y-m-d H:i:s');
        $weekly_id['updated_at']=$time;
        return var_dump($post);

        if (!empty($post['week_work_new'])) {
            foreach($post['week_work_new'] as $key => $val){
                $weekly_arr[$key] = [
                        'id' => $post['id'],
                        'week_id' => $key,
                        'week_work' => $val,
                        'week_results' => $post['week_results_new'][$key],
                    ];
                if (!empty($post['week_task_new'][$key])) {
                    foreach($post['week_task_new'][$key] as $task_key => $task_val){
                        $task_agent_arr[]= [
                            'week_id' => $key,
                            'week_task' => $task_val,
                            'week_agent' => $post['week_agents_new'][$key][$task_key]
                        ];
                    }
                }
            }

            //分解入库
            $task_agent_res=$this->upd_task_agent($task_agent_arr,$weekly_id);
        }

        array_walk($weekly_arr, function (&$value, $key, $weekly_id) {
                            $value = array_merge($value, $weekly_id);
                        }, $weekly_id);
        //任务入库
        $weekly_res=$this->upd_weekly($weekly_arr);
        if ($list_res['message'] == $weekly_res['message'] && $task_agent_res['message']==$weekly_res['message'] && $weekly_res['message']=='success') {
            $res = array('message' => 'success','weekly_id' => $list_res['weekly_id'] );
        }
        return $res;
    }
    public function upd_list(){
        $weekly_list = new Weekly_list;
        $weekly_list->week_no = $_POST['week_no']?: '';
        $weekly_list->userid = $_POST['userid']?: '';
        $weekly_list->weekly_status = $_POST['weekly_status']?: '0';
        $weekly_list->week_business = $_POST['week_business']?: '';
        $weekly_list->week_construction = $_POST['week_construction']?: '';
        $weekly_list->week_cooperation = $_POST['week_cooperation']?: '';
        $weekly_list->week_quality = $_POST['week_quality']?: '';
        $weekly_list->week_secret = $_POST['week_secret']?: '';
        $res = $weekly_list->save();
        $weekly_id = $weekly_list->id;
        $list_res = array('res' => $res,'weekly_id' => $weekly_id,'message' => 'success');
        return $list_res;
    }
    public function upd_weekly($weekly_arr){
        $weekly = new Weekly;
        // $res=$weekly->insert($weekly_arr);
        $res=$weekly->update($weekly_arr);
        $weekly_res = array('res' => $res,'message' => 'success');
        return $weekly_res;
    }
    public function upd_task_agent($task_agent_arr,$weekly_id){
        $week_task_agent = new Week_task_agent;
        array_walk($task_agent_arr, function (&$value, $key, $weekly_id) {
                            $value = array_merge($value, $weekly_id);
                        }, $weekly_id);
        $res=$week_task_agent->update($task_agent_arr);
        $week_task_agent_res = array('res' => $res,'message' => 'success');
        return $week_task_agent_res;
    }

    /**
     * Make a grid builder.
     *展示
     * @return Grid
     */
    protected function grid()
    {
        // $grid = new Grid(new Weekly_list);
        //根据角色判断显示内容
        $userid=Admin::user()->id;
        if(Admin::user()->isRole('Boss')){
            $grid = new Grid(new Weekly_list);
        }else{
            $grid = new Grid(new Weekly_list);
            $grid->model('Weekly_list')->where('userid',$userid);
        }
    
        $week_no=$this->getweek_no();
        //禁用原先的添加按钮
        // $grid->disableCreateButton();
        //判断当前周是否提交过周报
        $grid->tools(function ($tools){
            $tools->append(new IsCreate());
        });
        
        $grid->id('Id')->sortable();
        $grid->column('周报标题')->display(function ($week_no) {
            return "<span>第".$this->week_no."周总结周报</span>";
        });
        $grid->weekly_status('审核状态')->display(function ($weekly_status){
            if ($weekly_status=='') return '审核异常';
            switch ($weekly_status) {
                case '0':
                    return '已保存';
                    break;
                case '1':
                    return '已提交(待审核)';
                    break;
                case '2':
                    return '审核完成';
                    break;
                default:
                    return '审核异常1';
                    break;
            }
        });
        //行操作方法
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            // $actions->disableEdit();
            // $actions->disableView();
        });
        $grid->disableExport();
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Weekly_list::findOrFail($id));
        $week_no=$this->getweek_no();
        $userid=Admin::user()->id;

        $weekly_list=Weekly_list::where('id',$id)->get()->toArray();
        $weekly=Weekly::where('weekly_id',$id)->get()->toArray();
        $weekly=array_reverse($weekly);
        foreach ($weekly_list as $key => $value) {
            $weekly_list=$value;
        }
        return view('admin.self.info',['weekly_list'=>$weekly_list,'weekly'=>$weekly,'week_no'=>$week_no]);

        // $show->panel()  
        //      ->style('primary')
        //      ->title('周报详情')
        //      //去除修改和删除
        //      ->tools(function ($tools) {
        //             $tools->disableEdit();
        //             // $tools->disableList();
        //             $tools->disableDelete();
        //         });
        // // $show->id('Id');
        // $show->week_work('本周进行的工作');
        // $show->week_task_agents('任务分解及经办人', function ($week_task_agents) {
        //     $week_task_agents->disableCreateButton();
        //     $week_task_agents->actions(function ($actions) {
        //     $actions->disableDelete();
        //     $actions->disableEdit();
        //     $actions->disableView();
        // });
        //     $week_task_agents->week_task('任务分解');
        //     $week_task_agents->week_agent('经办人');
        // });
        // //  $show->week_task_agents('任务分解及经办人')->display(function ($week_task_agents) {
        // //     return "<span class='label label-warning'>".$week_task_agents->week_task."</span>";
        // // });
        // $show->week_results('本周的输出成果');
        // $show->week_business('业务开展');
        // $show->week_construction('部门建设');
        // $show->week_cooperation('跨组合作');
        // $show->week_quality('质量贯彻');
        // $show->week_secret('保密管理'); 
        // // $show->created_at('创建时间');
        // // $show->updated_at('修改时间');
        // return $show;   
    }
    public function is_submit(){
        $id=$_POST['weekly_list_id'];
        $weekly_list = Weekly_list::find($id);
        $weekly_list->weekly_status = '1';
        $weekly_list->save();
        return json_encode('success');
    }
    public function get_week(){
        $week_id=$_POST['week_id'];
        $weekly_id=$_POST['weekly_id'];
        $weekly_list=Week_task_agent::where(['weekly_id'=>$weekly_id,'week_id'=>$week_id])->get()->toArray();
        return json_encode($weekly_list);
    }

    /**
     * Make a form builder.
     *添加
     * @return Form
     */
    protected function form()
    {
        $week_no=$this->getweek_no();
        $userid=Admin::user()->id;
        return Admin::form(Weekly_list::class, function (Form $form)use ($week_no,$userid) {
            $form->hidden('week_no')->value($week_no);
            $form->hidden('userid')->value($userid);
            $form->hidden('weekly_status')->value(0);
            $form->tab('本周本组进行的任务', function ($form) use ($week_no,$userid){
                // $form->setView('admin.form.additem');
                // $form->html(function(){
                //         return view('admin.self.additem');
                //     });
                $form->hasMany('weekly','本周任务',function ($form) use ($week_no,$userid){

                        $form->row(4)->text('week_work', '本周任务')->rules('required');
                        $form->width(4)->text('week_results', '输出成果')->rules('required');
            //             $form->display('image','帖子图片')->with(function ($image){
            //             return view('admin.self.additem');
            // });
                //         // $form->hasMany('week_task_agents','任务分解及经办人',function ($form){
                //         //     // foreach($keys as $key){
                //         //     //     $array[$key->id]=$key->attr_name;
                //         //     // }
                //         //     $form->text('week_task','任务分解');
                //         //     $form->text('week_agent','经办人');
                //         // });
                });
                // $form->textarea('week_results', '输出成果');
            })->tab('围绕五个重点总体回顾', function ($form) {
                $form->text('week_business', '业务开展')->rules('required',['required'=>'业务开展项不能为空']);
                $form->text('week_construction', '部门建设')->rules('required',['required'=>'部门建设项不能为空']);
                $form->text('week_cooperation', '跨组合作')->rules('required',['required'=>'跨组合作项不能为空']);
                $form->text('week_quality', '质量贯彻')->rules('required',['required'=>'质量贯彻项不能为空']);
                $form->text('week_secret', '保密管理')->rules('required',['required'=>'保密管理项不能为空']);
            });
            $form->footer(function ($footer) {
            // 去掉`查看`checkbox
            $footer->disableViewCheck();
            // 去掉`继续编辑`checkbox
            // $footer->disableEditingCheck();
            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();
            });
            $form->disableReset();
            $form->submitted(function (Form $form) {
                 return var_dump($form);
            });
            $form->saving(function (Form $form) {
                dump($form);
            });
            $form->saved(function (Form $form) {
                dump($form);
            });
        });
        admin_toastr('laravel-admin 提示','success'); 
    }

     public function store()
    {
        // $request=new Request();
        // $input = $request->all();
        // var_dump($input);
        return $this->form()->store();
    }
}
