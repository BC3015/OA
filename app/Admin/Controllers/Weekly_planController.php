<?php

namespace App\Admin\Controllers;

use App\Models\Project;
use App\Models\Weekly_plan;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Grid;
use Encore\Admin\Form;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;


class Weekly_planController extends Controller
{
        public function index(Content $content)
    {

        // 选填
        $content->header('周计划');
        // 选填
        $content->description('计划列表');
        // 添加面包屑导航 since v1.5.7
        $content->breadcrumb(
            ['text' => '首页', 'url' => '/'],
            ['text' => '用户管理', 'url' => '/users'],
            ['text' => '编辑用户']
        );
        // 填充页面body部分，这里可以填入任何可被渲染的对象
        $content->body($this->grid());
        // 在body中添加另一段内容
        // $content->body('foo bar');
        // // `row`是`body`方法的别名
        // $content->row('hello world');
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
        return $content
            ->header('详情页面')
            ->description('计划详情')
            ->body($this->detail($id));
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

    /**
     * Create interface.
     *添加的表头
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('新建计划')
            ->description('添加')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *展示
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Weekly_plan);
        $grid->week_no('计划周号');
        $grid->startDate('开始日期');
        $grid->endDate('结束日期');
        $grid->plan_content('计划内容');
        $grid->plan_result('计划目标');
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
        $show = new Show(Weekly_plan::findOrFail($id));
        $show->week_no('计划周号')->label();
        $show->plan_content('计划内容');
        $show->plan_result('计划目标');
        $show->startDate('开始日期');
        $show->endDate('结束日期');
        $show->created_at('创建时间');
        $show->updated_at('修改时间');
        return $show;
    }
    /**
     * Make a form builder.
     *添加
     * @return Form
     */
    protected function form()
    {
    	$week_no=$this->getweek_no()+1;
    	if ($week_no<'10') {
    		$week_no='0'.$week_no;
    	}
        return Admin::form(Weekly_plan::class, function(Form $form) use ($week_no){
            $form->text('week_no', '计划周号')->default($week_no);
            $form->dateRange('startDate', 'endDate', '计划日期');
            $form->textarea('plan_content', '计划内容');
            $form->text('plan_result','计划目标');
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

    // 获取下周周号
    public function getweek_no()
    {
        return $week_no=date('W',time());
    }
	public function store()
    {
        return $this->form()->store();
    }
    public function update($id)
    {
        return $this->form()->update($id);
    }
}
