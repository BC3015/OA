<?php

namespace App\Admin\Controllers;

use App\Models\Week;
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


class WeekController extends Controller
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
            ->description('周报详情')
            ->body($this->detail($id))
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
            ->header('新建周报')
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
        $grid = new Grid(new Week);
        $grid->week_work('本周本组进行的任务');
        $grid->week_task('任务分解');
        $grid->week_agent('任务经办人');
        $grid->week_results('输出成果');
        $grid->week_business('业务开展');
        $grid->week_construction('部门建设');
        $grid->week_cooperation('跨组合作');
        $grid->week_quality('质量贯彻');
        $grid->week_secret('保密管理');
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
        $show = new Show(Week::findOrFail($id));
        $show->week_work('本周本组进行的任务');
        $show->week_task('任务分解');
        $show->week_agent('任务经办人');
        $show->week_results('输出成果');
        $show->week_business('业务开展');
        $show->week_construction('部门建设');
        $show->week_cooperation('跨组合作');
        $show->week_quality('质量贯彻');
        $show->week_secret('保密管理');
        return $show;
    }
    /**
     * Make a form builder.
     *添加
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Week::class, function(Form $form){
            $form->tab('本周本组进行的任务', function ($form) {
                $form->textarea('week_work', '本周本组进行的任务');
            })->tab('本周任务分解及任务经办人', function ($form) {
                $form->hasMany('week','任务分解及经办人',function ($form) {
                    $form->text('week_task','任务分解');
                    $form->text('week_agent','任务经办人');
                 });
            })->tab('输出成果有哪些', function ($form) {
                $form->textarea('week_results', '输出成果');
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
        return $this->form()->store();
    }
}
