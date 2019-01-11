<?php

namespace App\Admin\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Grid;
use Encore\Admin\Form;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;


class TaskController extends Controller
{
        public function index(Content $content)
    {

        // 选填
        $content->header('任务管理');
        // 选填
        $content->description('任务列表');
        // 添加面包屑导航 since v1.5.7
        $content->breadcrumb(
            ['text' => '首页', 'url' => '/'],
            ['text' => '用户管理', 'url' => '/users'],
            ['text' => '编辑用户']
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
        return $content
            ->header('详情页面')
            ->description('任务详情')
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
            ->header('新建任务')
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
        $grid = new Grid(new Task);
        $grid->task_type('任务类型');
        $grid->project_id('项目名称');
        $grid->task_name('任务名称');
        $grid->nature('性质');
        $grid->personnel('人员');
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
        $show = new Show(Task::findOrFail($id));
        $show->task_type('任务类型');
        $show->project_id('项目名称');
        $show->task_name( '任务名称');
        $show->nature('性质');
        $show->personnel('人员');
        $show->cooperate( '配合人员');
        $show->describe('描述');
        return $show;
    }
    /**
     * Make a form builder.
     *添加
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Task::class, function(Form $form){
            $form->radio('task_type', '任务类型')->options([0 => '项目任务', 1=> '自定义任务'])->default(0);
            $form->select('project_id','项目名称')->options(Task::get_project());
            $form->text('task_name', '任务名称');
            $form->select('nature','性质')->options(['预研' => '预研', '样机' => '样机', '产品' => '产品']);
            $form->select('personnel','人员')->options([1 => '预研', 2 => '样机', 3 => '产品']);
            $form->text('cooperate', '配合人员');
            $form->text('describe', '描述');
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
        return $this->form()->store();
    }
    public function update($id)
    {
        return $this->form()->update($id);
    }
}
