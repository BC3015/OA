
    <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>标融OA  | Edit</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/iCheck/all.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/bootstrap-fileinput/css/fileinput.min.css?v=4.3.7">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/ionslider/ion.rangeSlider.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/ionslider/ion.rangeSlider.skinNice.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/bootstrap-duallistbox/dist/bootstrap-duallistbox.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/laravel-admin/laravel-admin.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/nprogress/nprogress.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/nestable/nestable.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/toastr/build/toastr.min.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/google-fonts/fonts.css">
    <link rel="stylesheet" href="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/dist/css/AdminLTE.min.css">


    <script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/admin/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>标融</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>标融</b> OA</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="http://laravel_admin.com/public/upload/images/09ad5634bab4810e14b9d0d18fc99222.jpg" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">Administrator</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="http://laravel_admin.com/public/upload/images/09ad5634bab4810e14b9d0d18fc99222.jpg" class="img-circle" alt="User Image">

                            <p>
                                Administrator
                                <small>Member since admin 2018-12-07 05:58:12</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="/admin/auth/setting" class="btn btn-default btn-flat">设置</a>
                            </div>
                            <div class="pull-right">
                                <a href="/admin/auth/logout" class="btn btn-default btn-flat">登出</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                
                    
                
            </ul>
        </div>
    </nav>
</header>
    <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://laravel_admin.com/public/upload/images/09ad5634bab4810e14b9d0d18fc99222.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Administrator</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">菜单</li>

            <li>
                             <a href="/admin/">
                            <i class="fa fa-bar-chart"></i>
                                    <span>首页</span>
                            </a>
        </li>
    <li class="treeview">
            <a href="#">
                <i class="fa fa-tasks"></i>
                                    <span>管理员管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                                    <li>
                             <a href="/admin/auth/users">
                            <i class="fa fa-users"></i>
                                    <span>管理员列表</span>
                            </a>
        </li>
                                        <li>
                             <a href="/admin/auth/roles">
                            <i class="fa fa-user"></i>
                                    <span>角色列表</span>
                            </a>
        </li>
                                        <li>
                             <a href="/admin/auth/permissions">
                            <i class="fa fa-ban"></i>
                                    <span>权限列表</span>
                            </a>
        </li>
                                        <li>
                             <a href="/admin/auth/menu">
                            <i class="fa fa-bars"></i>
                                    <span>菜单列表</span>
                            </a>
        </li>
                                        <li>
                             <a href="/admin/auth/logs">
                            <i class="fa fa-history"></i>
                                    <span>操作日志</span>
                            </a>
        </li>
                                </ul>
        </li>
    <li class="treeview">
            <a href="#">
                <i class="fa fa-calendar-check-o"></i>
                                    <span>周报</span>
                                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                                    <li>
                             <a href="/admin/weekly">
                            <i class="fa fa-bars"></i>
                                    <span>周报填写</span>
                            </a>
        </li>
                                        <li>
                             <a href="/admin/weekly_review">
                            <i class="fa fa-bars"></i>
                                    <span>周报审核</span>
                            </a>
        </li>
                                </ul>
        </li>
    
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
    <div class="content-wrapper" id="pjax-container">
        <div id="app">
            <section class="content-header">
        <h1>
            Edit
            <small>description</small>
        </h1>

        <!-- breadcrumb start -->
                <ol class="breadcrumb" style="margin-right: 30px;">
            <li><a href="http://laravel_admin.com/admin"><i class="fa fa-dashboard"></i> Home</a></li>   
                            <li>
                Weekly
                </li>
                            <li>
                {{$week_no}}
                </li>
                            <li>
                Edit
                </li>
                    </ol>
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-7"><div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">创建</h3>

        <div class="box-tools">
            <div class="btn-group pull-right" style="margin-right: 5px">
    <a href="http://laravel_admin.com/admin/weekly" class="btn btn-sm btn-default" title="列表"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;列表</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="http://laravel_admin.com/admin/weekly" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

        <div class="box-body">

                            <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">

                    <li class=active>
                <a href="#tab-form-1" data-toggle="tab">
                    本周本组进行的任务 <i class="fa fa-exclamation-circle text-red hide"></i>
                </a>
            </li>
                    <li >
                <a href="#tab-form-2" data-toggle="tab" id="five">
                    围绕五个重点总体回顾 <i class="fa fa-exclamation-circle text-red hide"></i>
                </a>
            </li>
        
    </ul>
    <div class="tab-content fields-group">

                    <div class="tab-pane active" id="tab-form-1">
                                    <input type="hidden" name="week_no" value="{{$week_no}}" class="week_no"  />

                                    <input type="hidden" name="userid" value="{{$userid}}" class="userid"  />

                                    <input type="hidden" name="weekly_status" value="0" class="weekly_status"  />


                                    <div class="row">
    <div class="col-sm-2 "><h4 class="pull-right">本周任务</h4></div>
    <div class="col-sm-8"></div>
</div>

<hr style="margin-top: 0px;">

<div id="has-many-weekly" class="has-many-weekly">

    <div class="has-many-weekly-forms">

            </div>

<!-- 保存部分 -->
<p id="week_lenth" value="{{$week_lenth}}"></p>
@foreach ($weekly as $weekly)
        <div class="has-many-weekly-form fields-group">
            <div class="form-group " style="float: left;">
    <label  style="width: 100px;" for="week_work" class="col-sm-2  control-label">本周任务</label>
                                    <input type="hidden" name="id" value="{{$weekly['id']}}"/>
            <textarea name="week_work_new[{{$weekly['week_id']}}]" id="week_work" cols="30" rows="3" class=" weekly week_work" placeholder="输入 本周任务 ">{{$weekly['week_work']}}</textarea>       
</div>
<div class="form-group ">
    <label style="width: 100px;" for="week_results" class="col-sm-2  control-label">输出成果</label>
            <textarea name="week_results_new[{{$weekly['week_id']}}]" id="week_results" cols="30" rows="3" class=" weekly week_results" placeholder="输入 输出成果">{{$weekly['week_results']}}</textarea>       
</div>
<div class="row task_agents" style="margin-top: -10px" >
    <div class="col-sm-3"><h4 class="pull-right">任务分解及经办人</h4></div>
</div>
<div id="has-many-week_task_agents" class="has-many-week_task_agents" type="1">
    <div class="has-many-week_task_agents-forms">
            </div>
    <template class="week_task_agents-tpl">
        <div class="has-many-week_task_agents-form fields-group">
            <div class="form-group  ">
    <label for="week_task" class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
                        <label style="width: 100px;" for="week_task" >任务分解:</label>
            <textarea style="margin-left: -20px" name="week_task_new[__LA_KEY__][]" id="week_task" cols="25" rows="2" class=" week_task_agents week_task" placeholder="输入 任务分解"></textarea>   
            <label style="width: 100px;margin-left: 20px; " for="week_agent">经办人:</label>
            <textarea style="margin-left: -40px" name="week_agents_new[__LA_KEY__][]" id="week_agent" cols="15" rows="2" class=" week_task_agents week_agent" placeholder="输入 经办人"></textarea>   
            <div class="remove-task btn btn-warning btn-sm pull-right" ><i class="fa fa-trash"></i>&nbsp;移除当前任务分解</div>
    </div>
</div>
        </div>
    </template>
    <div class="form-group">
        <label class="col-sm-2  control-label"></label>
        <div class="col-sm-8">
            <div class="add-task-btn btn btn-info btn-sm"><i class="fa fa-save"></i>&nbsp;新增任务分解</div>
            <div class="remove btn btn-danger btn-sm pull-right" style="margin: 0px;"><i class="fa fa-trash"></i>&nbsp;移除任务</div>
        </div>
    </div>
</div>
            <hr>
        </div>
        @endforeach
<!-- 保存部分 -->


    <template class="weekly-tpl">
        <div class="has-many-weekly-form fields-group">
            <div class="form-group " style="float: left;">
    <label  style="width: 100px;" for="week_work" class="col-sm-2  control-label">本周任务</label>
            <textarea name="week_work_new[__LA_KEY__]" id="week_work" cols="30" rows="3" class=" weekly week_work" placeholder="输入 本周任务 "></textarea>       
</div>
<div class="form-group ">
    <label style="width: 100px;" for="week_results" class="col-sm-2  control-label">输出成果</label>
            <textarea name="week_results_new[__LA_KEY__]" id="week_results" cols="30" rows="3" class=" weekly week_results" placeholder="输入 输出成果"></textarea>       
</div>
<div class="row task_agents" style="margin-top: -10px" >
    <div class="col-sm-3"><h4 class="pull-right">任务分解及经办人</h4></div>
</div>
<div id="has-many-week_task_agents" class="has-many-week_task_agents" type="1">
    <div class="has-many-week_task_agents-forms">
            </div>
    <template class="week_task_agents-tpl">
        <div class="has-many-week_task_agents-form fields-group">
            <div class="form-group  ">
    <label for="week_task" class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
                        <label style="width: 100px;" for="week_task" >任务分解:</label>
            <textarea style="margin-left: -20px" name="week_task_new[__LA_KEY__][]" id="week_task" cols="25" rows="2" class=" week_task_agents week_task" placeholder="输入 任务分解"></textarea>   
            <label style="width: 100px;margin-left: 20px; " for="week_agent">经办人:</label>
            <textarea style="margin-left: -40px" name="week_agents_new[__LA_KEY__][]" id="week_agent" cols="15" rows="2" class=" week_task_agents week_agent" placeholder="输入 经办人"></textarea>   
            <div class="remove-task btn btn-warning btn-sm pull-right" ><i class="fa fa-trash"></i>&nbsp;移除当前任务分解</div>

    </div>
</div>
        </div>
    </template>
    <div class="form-group">
        <label class="col-sm-2  control-label"></label>
        <div class="col-sm-8">
            <div class="add-task-btn btn btn-info btn-sm"><i class="fa fa-save"></i>&nbsp;新增任务分解</div>
            <div class="remove btn btn-danger btn-sm pull-right" style="margin: 0px;"><i class="fa fa-trash"></i>&nbsp;移除任务</div>
        </div>
    </div>
</div>
            
            <hr>
        </div>
    </template>

    <div class="form-group">
        <label class="col-sm-2  control-label"></label>
        <div class="col-sm-8">
            <div class="add btn btn-success btn-sm"><i class="fa fa-save"></i>&nbsp;新增任务</div>
        </div>
    </div>

</div>
                            </div>
                    <div class="tab-pane " id="tab-form-2">
                                    <div class="form-group  ">

    <label for="week_business" class="col-sm-2  control-label">业务开展</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_business" name="week_business" value="{{$weekly_list['week_business']}}" class="form-control week_business" placeholder="输入 业务开展" />

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="week_construction" class="col-sm-2  control-label">部门建设</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_construction" name="week_construction" value="{{$weekly_list['week_construction']}}" class="form-control week_construction" placeholder="输入 部门建设" />

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="week_cooperation" class="col-sm-2  control-label">跨组合作</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_cooperation" name="week_cooperation" value="{{$weekly_list['week_cooperation']}}" class="form-control week_cooperation" placeholder="输入 跨组合作" />

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="week_quality" class="col-sm-2  control-label">质量贯彻</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_quality" name="week_quality" value="{{$weekly_list['week_quality']}}" class="form-control week_quality" placeholder="输入 质量贯彻" />

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="week_secret" class="col-sm-2  control-label">保密管理</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_secret" name="week_secret" value="{{$weekly_list['week_secret']}}" class="form-control week_secret" placeholder="输入 保密管理" />

            
        </div>

        
    </div>
</div>
                            </div>
        
    </div>
</div>            
        </div>
        <!-- /.box-body -->

        <div class="box-footer">

    <input type="hidden" name="_token" value="F1KbpGeWsP9mUPOJZFVIwzsNiMgz29uPEqPReSxT">

    <div class="col-md-2">
    </div>

    <div class="col-md-8">

        <div class="btn-group pull-right">
            <button type="button" id="save" class="btn btn-primary">保存并预览</button>
        </div>

        <!-- <label class="pull-right" style="margin: 5px 10px 0 0;">
            <input type="checkbox" class="after-submit" name="after-save" value="1"> 继续编辑
        </label> -->
        
        
        
        
                    </div>
</div>

        
        <!-- /.box-footer -->
    </form>
</div>

</div><div class="col-md-5"><div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">历史周报及任务列表</h3>

        <div class="box-tools">
            <div class="btn-group pull-right" style="margin-right: 5px">
    <a href="http://laravel_admin.com/admin/weekly" class="btn btn-sm btn-default" title="列表"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;列表</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="http://laravel_admin.com/admin/weekly" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

        <div class="box-body">

                            <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">

                    <li class=active>
                <a href="#tab-form-3" data-toggle="tab">
                    本周本组进行的任务 <i class="fa fa-exclamation-circle text-red hide"></i>
                </a>
            </li>
                    <li >
                <a href="#tab-form-4" data-toggle="tab">
                    围绕五个重点总体回顾 <i class="fa fa-exclamation-circle text-red hide"></i>
                </a>
            </li>
        
    </ul>
    <div class="tab-content fields-group">

                            </div>
                    <div class="tab-pane " id="tab-form-2">
                                    <div class="form-group  ">

    <label for="week_business" class="col-sm-2  control-label">业务开展</label>

    <div class="col-sm-8">
        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_business" name="" value="" class="form-control week_business" placeholder="输入 业务开展" />
    
        </div>
  
    </div>
</div>
        
    </div>
</div>
         </div>
        
    </div>
</div>            
        </div>

    </form>
</div>

</div></div>

    </section>
        </div>
        <script data-exec-on-popstate>

$(document).ready(function () {

     if(location.href.indexOf("#reloaded")==-1){
        location.href=location.href+"#reloaded";
        location.reload();
    }

$(document).on("change","input,textarea,select",function(){
    window.onbeforeunload = function(event) {
          return "您编辑的信息尚未保存，您确定要离开吗？"
    };
});
   
$("#save").on('click', function () { 
    var week_business=$(" input[ name='week_business' ] ").val()
    var week_construction=$(" input[ name='week_construction' ] ").val()
    var week_cooperation=$(" input[ name='week_cooperation' ] ").val()
    var week_quality=$(" input[ name='week_quality' ] ").val()  
    var week_secret=$(" input[ name='week_secret' ] ").val()
    if (week_business=='' || week_construction=='' || week_cooperation=='' || week_quality=='' ||week_secret=='') {
        $('#five').attr('style','color:red');
        alert('还有回顾项没有填写，请完成后再进行保存。');
        document.body.scrollTop = document.documentElement.scrollTop = 0;
        return false;
        }
    var data = $('form').serialize();
    //ajax提交
    console.log(data)
    $.ajax({
        type: 'POST',//方法类型
        dataType: 'json',//预期服务器返回的数据类型
        url: "/admin/weekly/upd" ,//url
        data: data,
        success: function (result) {
            console.log(result);//打印服务端返回的数据(调试用)
            weekly_id = result.weekly_id;
            if (result.message=='success111') {
                bootbox.alert({ 
                    size: "small",
                    title: "周报提示",
                    message: "修改成功！即将跳转至预览页面。", 
                    callback: function(){
                        //验证成功后实现跳转
                        window.location.href = "/admin/weekly/"+weekly_id;}
                    })
                };
        },
        error : function(event) {
            console.log(event)
            alert("异常！");
        }
    });
            return false;

} );

$(document).on('click', '.task_agents', function () {
    if ($(this).attr('type')=='1') {
        $(this).next('.has-many-week_task_agents').hide();
        $(this).attr("type", "2"); 
        $(this).attr("style", "color:#ccc"); 
    }else{
        $(this).next('.has-many-week_task_agents').show();
        $(this).attr("type", "1"); 
        $(this).attr("style", ""); 
    }
})



var hash = document.location.hash;
if (hash) {
    $('.nav-tabs a[href="' + hash + '"]').tab('show');
}

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    history.pushState(null,null, e.target.hash);
});

if ($('.has-error').length) {
    $('.has-error').each(function () {
        var tabId = '#'+$(this).closest('.tab-pane').attr('id');
        $('li a[href="'+tabId+'"] i').removeClass('hide');
    });

    var first = $('.has-error:first').closest('.tab-pane').attr('id');
    $('li a[href="#'+first+'"]').tab('show');
}

var index_task = 0;
$(document).on('click', '.add-task-btn', function () {
    var tpl = $(this).parents('.has-many-week_task_agents').find('template.week_task_agents-tpl');
    index_task++;

    var template = tpl.html().replace(/__LA_KEY__/g, index);
    $(this).parents('.has-many-week_task_agents').find('.has-many-week_task_agents-forms').append(template);
    
});

$(document).on('click', '.remove-task', function () {
    $(this).parents('.has-many-week_task_agents-form').remove();
});

var index=$('#week_lenth').attr('value');
// var index = 0;
$('#has-many-weekly').on('click', '.add', function () {

    var tpl = $('template.weekly-tpl');

    index++;

    var template = tpl.html().replace(/__LA_KEY__/g, index);
    $('.has-many-weekly-forms').append(template);
    
});

$('#has-many-weekly').on('click', '.remove', function () {
    $(this).parents('.has-many-weekly-form').prev().remove();
    $(this).parents('.has-many-weekly-form').remove();
});



                    $('.after-submit').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChecked', function () {
    $('.after-submit').not(this).iCheck('uncheck');
});
            });
</script>
    </div>

    
</div>

<script>
    function LA() {}
    LA.token = "F1KbpGeWsP9mUPOJZFVIwzsNiMgz29uPEqPReSxT";
</script>

<!-- REQUIRED JS SCRIPTS -->
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/dist/js/app.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/jquery-pjax/jquery.pjax.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/nprogress/nprogress.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/nestable/jquery.nestable.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/toastr/build/toastr.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/laravel-admin/laravel-admin.js"></script>
<script src="http://laravel_admin.com/js/bootbox.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/input-mask/jquery.inputmask.bundle.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/moment/min/moment-with-locales.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js?v=4.3.7"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/bootstrap-fileinput/js/fileinput.min.js?v=4.3.7"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/select2/select2.full.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/number-input/bootstrap-number-input.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/AdminLTE/plugins/ionslider/ion.rangeSlider.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.min.js"></script>
<script src="http://laravel_admin.com/vendor/laravel-admin/bootstrap-duallistbox/dist/jquery.bootstrap-duallistbox.min.js"></script>


</body>
</html>
