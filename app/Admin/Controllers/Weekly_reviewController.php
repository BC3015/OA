<?php

namespace App\Admin\Controllers;

use App\Models\Weekly_list;
use App\Models\Weekly;
use App\Models\Week_task_agent;
use App\Models\Week_statu;
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
use Illuminate\Support\Facades\DB;


class Weekly_reviewController  extends Controller
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
        $userid=Admin::user()->id;

        $weekly_list=Weekly_list::where('id',$id)->get()->toArray();
        $weekly=Weekly::where('weekly_id',$id)->get()->toArray();
        $weekly=array_reverse($weekly);
        foreach ($weekly_list as $key => $value) {
            $weekly_list=$value;
        }
        return view('admin.self.review_info',['weekly_list'=>$weekly_list,'weekly'=>$weekly,'week_no'=>$week_no]);
        
        // $week_no=$this->getweek_no();
        // if(Admin::user()->isRole('Boss')){
        //     return $content
        //     ->header('第'.$week_no.'周总结周报')
        //     ->description('详情页面')
        //     ->body($this->detailA_B($id))
        //     ->body($this->detailC($id))
        //     ->body($this->detailD($id));
        // }else{
        //     return $content
        //     ->header('第'.$week_no.'周总结周报')
        //     ->description('详情页面')
        //     ->body($this->detail($id));
        // }
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
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
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
        $week_no=$this->getweek_no();
            return $content
            ->header('新建周报')
            ->description('第'.$week_no.'周总结周报')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *展示
     * @return Grid
     */
    protected function grid()
    {
        // $grid = new Grid(new Week);
        //根据角色判断显示内容
        $userid=Admin::user()->id;
        if(Admin::user()->isRole('Boss')){
            $grid = new Grid(new Weekly_list);
        }else{
            $grid = new Grid(new Weekly_list);
            $grid->model('Weekly_list')->where('userid',$userid)->where('weekly_status','>','0');
        }
    
        $week_no=$this->getweek_no();
        //禁用原先的添加按钮
        $grid->disableCreateButton();
        //判断当前周是否提交过周报
        // $grid->tools(function ($tools) use ($userid){
        //     $tools->append(new IsCreate($userid));
        // });
        
        $grid->id('Id')->sortable();
        $grid->column('周报标题')->display(function ($week_no){
            return "<span>第".$this->week_no."周总结周报</span>";
        });

        $grid->userid('填写人')->display(function ($userid) {
            $uname = DB::select('select `username` from admin_users where id = '.$userid);
            $uname=$uname[0]->username;
            return $uname;
        });

        $grid->weekly_status('审核状态')->display(function ($weekly_status){
            if (empty($weekly_status)) return '审核异常1';
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
            $actions->disableEdit();
            // $actions->disableView();
        });
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
        return view('admin.self.review_info',['weekly_list'=>$weekly_list,'weekly'=>$weekly,'week_no'=>$week_no]);

        // $show = new Show(Weekly_list::findOrFail($id));
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
    public function get_week(){
        $week_id=$_POST['week_id'];
        $weekly_id=$_POST['weekly_id'];
        $weekly_list=Week_task_agent::where(['weekly_id'=>$weekly_id,'week_id'=>$week_id])->get()->toArray();
        return json_encode($weekly_list);
    }

    protected function detailA_B($id)
    {
        $show = new Show(Week::findOrFail($id));
        $show->panel()
             ->style('primary')
             ->title('A-B')
             //去除修改和删除
             ->tools(function ($tools) {
                    $tools->disableEdit();
                    // $tools->disableList();
                    $tools->disableDelete();
                });
        // $show->id('Id');
        $show->week_work('本周进行的工作');
        // $show->week_task_agents('任务分解及经办人')->display(function ($week_task_agents) {
        //     return "<span class='label label-warning'>".$week_task_agents->week_task."</span>";
        // });
        $show->week_task_agents('任务分解及经办人', function ($week_task_agents) {
            $week_task_agents->disableCreateButton();
            $week_task_agents->actions(function ($actions) {
                $actions->disableDelete();
                $actions->disableEdit();
                $actions->disableView();
                $actions->append('<a href=""><i class="fa fa-paper-plane"></i></a>');
            });
            $week_task_agents->week_task('任务分解');
            $week_task_agents->week_agent('经办人');
        });

        return $show;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detailC($id)
    {
        $show = new Show(Week::findOrFail($id));
        $show->panel()
             ->style('primary')
             ->title('C')
             //去除修改和删除
             ->tools(function ($tools) {
                    $tools->disableEdit();
                    $tools->disableList();
                    $tools->disableDelete();
                });
        $show->week_results('本周的输出成果');
        return $show;
    }
    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detailD($id)
    {
        $show = new Show(Week::findOrFail($id));
        $show->panel()
             ->style('primary')
             ->title('D')
             //去除修改和删除
             ->tools(function ($tools) {
                    $tools->disableEdit();
                    $tools->disableList();
                    $tools->disableDelete();
                });
        $show->week_business('业务开展');
        $show->week_construction('部门建设');
        $show->week_cooperation('跨组合作');
        $show->week_quality('质量贯彻');
        $show->week_secret('保密管理'); 
        // $show->created_at('创建时间');
        // $show->updated_at('修改时间');
        return $show;
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
        return Admin::form(Weekly_list::class, function(Form $form) use ($week_no,$userid){
            $form->hidden('week_no')->value($week_no);
            $form->hidden('userid')->value($userid);
            $form->hidden('week_status.week_status')->value(0);
            $form->tab('本周本组进行的任务', function ($form) {
                $form->textarea('week_work', '本周本组进行的任务'); 
                $form->textarea('week_results', '输出成果'); 
            // })->tab('本周任务分解及任务经办人', function ($form) {
            //     // $form->hasMany('week_task_agents','任务分解及经办人',function ($form){
            //     //     $form->text('week_task','任务分解');
            //     //     $form->text('week_agent','任务经办人');
            //     //  });
            // })->tab('输出成果有哪些', function ($form) {
            //     $form->textarea('week_results', '输出成果');
            })->tab('围绕五个重点总体回顾', function ($form) {
                $form->text('week_business', '业务开展');
                $form->text('week_construction', '部门建设');
                $form->text('week_cooperation', '跨组合作');
                $form->text('week_quality', '质量贯彻');
                $form->text('week_secret', '保密管理');
            });
            $form->footer(function ($footer) {
            // 去掉`查看`checkbox
            $footer->disableViewCheck();
            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();
            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();
            });
        });
    }

     public function store()
    {
        $week_no=$this->getweek_no();
        return $this->form($week_no)->store();
    }
}
