<?php

namespace App\Admin\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Show;

class MovieController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('标志')
            ->description('描述')
            ->body($this->grid());
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
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
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
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('添加')
            ->description('描述')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Movie);
        $grid->actions(function ($actions) {
            // $actions->disableDelete();
            // $actions->disableEdit();
            // $actions->disableView();
            $actions->append('<a href=""><i class="fa fa-eye"></i></a>');   
            $actions->prepend('<a href=""><i class="fa fa-paper-plane"></i></a>');
        });
        // 第一列显示id字段，并将这一列设置为可排序列
        $grid->id('ID')->sortable();
        // 第二列显示title字段，由于title字段名和Grid对象的title方法冲突，所以用Grid的column()方法代替
        $grid->title('标题');
        // 第三列显示director字段，通过display($callback)方法设置这一列的显示内容为users表中对应的用户名
        $grid->director()->display(function($userId) {
            return User::find($userId+1)->name;
        });
        // 第四列显示为describe字段
        $grid->describe('描述');
        // 第五列显示为rate字段
        $grid->rate('价格');
        // 第六列显示released字段，通过display($callback)方法来格式化显示输出
        $grid->released('是否上映')->display(function ($released) {
            return $released ? '是' : '否';
        });
        // 下面为三个时间字段的列显示
        $grid->release_at('发布日期');
        $grid->created_at('创建日期');
        $grid->updated_at('修改日期');
        // filter($callback)方法用来设置表格的简单搜索框
        $grid->filter(function ($filter) {
            // 设置created_at字段的范围查询
            $filter->between('created_at', 'Created Time')->datetime();

        // $grid = new Grid(new User);
        // $grid->id('Id');
        // $grid->name('姓名');
        // $grid->email('邮箱');
        // $grid->email_verified_at('电子邮件验证');
        // $grid->password('密码');
        // $grid->remember_token('记住令牌');
        // $grid->created_at('创建时间');
        // $grid->updated_at('修改时间');

        // return $grid;
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
        $show = new Show(User::findOrFail($id));

        $show->id('Id');
        $show->name('姓名');
        $show->email('邮箱');
        $show->email_verified_at('电子邮件验证');
        $show->password('密码');
        $show->remember_token('记住令牌');
        $show->created_at('创建时间');
        $show->updated_at('修改时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Movie);
        $grid = Admin::form(Movie::class, function(Form $form){
        // 显示记录id
        $form->display('id', 'ID');
        // 添加text类型的input框
        $form->text('title', '电影标题');
        $directors =User::pluck('name')->toArray();
        $form->select('director', '导演')->options($directors);
        // 添加describe的textarea输入框
        $form->textarea('describe', '简介');
        // 数字输入框
        $form->number('rate', '打分');
        // 添加开关操作
        $form->switch('released', '发布');
        // 添加日期时间选择框
        $form->datetime('release_at', '发布时间');
        // 两个时间显示
        $form->display('created_at', '创建时间');
        $form->display('updated_at', '修改时间');
    //     $form->text('name', '姓名');
    //     $form->email('email', '邮箱');
    //     $form->datetime('email_verified_at', '电子邮件验证')->default(date('Y-m-d H:i:s'));
    //     $form->password('password', '密码');
    //     $form->text('remember_token', '记住令牌');

        
    });
        return $grid;
    }
}
