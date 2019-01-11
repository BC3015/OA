<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>标融OA  | 第{{$weekly_list['week_no']}}}周总结周报</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="http://laravel_admin.com/statics/grade1.css">
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

<body class="hold-transition skin-blue sidebar- mini">
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
                             <a href="/admin/weekly_plan">
                            <i class="fa fa-calendar-check-o"></i>
                                    <span>周计划</span>
                            </a>
        </li>
                                </ul>
        </li>
    <li class="treeview">
            <a href="#">
                <i class="fa fa-balance-scale"></i>
                                    <span>审核</span>
                                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                                    <li>
                             <a href="/admin/weekly_review">
                            <i class="fa fa-bars"></i>
                                    <span>周报审核</span>
                            </a>
        </li>
                                </ul>
        </li>
    <li>
                             <a href="/admin/project">
                            <i class="fa fa-database"></i>
                                    <span>项目管理</span>
                            </a>
        </li>
    <li>
                             <a href="/admin/task">
                            <i class="fa fa-coffee"></i>
                                    <span>任务管理</span>
                            </a>
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
            第02周总结周报
            <small>详情页面</small>
        </h1>

        <!-- breadcrumb start -->
                <ol class="breadcrumb" style="margin-right: 30px;">
            <li><a href="http://laravel_admin.com/admin"><i class="fa fa-dashboard"></i> Home</a></li>   
                            <li>
                Weekly_review
                </li>
                            <li>
                352
                </li>
                    </ol>
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-12">

<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">周报详情</h3>
            <div class="box-tools">
                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a href="http://laravel_admin.com/admin/weekly_review" class="btn btn-sm btn-default" title="列表"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;列表</span></a> 
                </div>
            </div>
        </div>
    <!-- /.box-header -->
    <!-- form start -->
            <form action="http://laravel_admin.com/admin/weekly" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>
                <div class="box-body">
                    <div class="fields-group">
                        <div class="form-group">
                            <label  class="col-sm-2  control-label"></label>
                            <div class="col-sm-8">
                                <div id="my-body">
                                    <div class="nav-tabs-custom">
                                        <div class="tab-content fields-group">
                                            <input type="hidden" name="weekly_status" value="0" class="weekly_status">
                                            <table class="table table-hover" id="table" style="width: 65%;float: left;">
                                            <!-- table-condensed  紧凑-->
                                                <thead>
                                                    <tr>
                                                        <th width="5%" style="text-align: center;">ID</th>
                                                        <th width="" style="text-align: center;">本周任务</th>
                                                        <th width="" style="text-align: center;">输出成果</th>
                                                        <th width="5%" style="text-align: center;">任务分解</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="has-many-weekly-forms-table">

                                                    @foreach ($weekly as $weekly)
                                                        <tr class="has-many-weekly-form-table">
                                                            <td style="text-align: center;vertical-align:middle">{{$weekly['week_id']}}</td>
                                                            <td><textarea name="" class="form-control weekly week_work" id="" cols="10" rows="3" readonly ="readonly"> {{$weekly['week_work']}}</textarea></td>
                                                            <td><textarea name="" class="form-control weekly week_results" id="" cols="5" rows="3" readonly ="readonly"> {{$weekly['week_results']}}</textarea></td>
                                                            <td style="text-align: center;" ><button type="button" class="btn btn-default show_task_agent" data-toggle="button" show_type="0" week_id="{{$weekly['week_id']}}" weekly_id="{{$weekly_list['id']}}">显示任务分解</button></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <div style="width: 35%;height: 400px ;background-color: #F5F5F5;float: left;overflow:auto;"  class="panel panel-info">
                                                <div class="panel-heading" id="panel-heading">
                                                    <h3 class="panel-title">评价区</h3>
                                                </div>

                                                    <div class="content" id="task_agent"> 
                                                     <!-- <script src="/statics/jquery-latest.pack.js" type="text/javascript"></script>  -->
                                                    <script src="/statics/grade.js" type="text/javascript"></script> 
                                                        <div id="myPoint" style="height:70px">
                                                            <span><big>5</big><small>.0</small></span> 
                                                            <div>
                                                                <img src="/statics/star5.gif" />
                                                                <em>(一般)</em>
                                                            </div>
                                                        </div> 
                                                        <div id="doPoint" > 
                                                            <p>请点击以下星级进行评分：我的评分=(处理+成果+总结)/3</p> 
                                                            <table cellspacing="0" cellpadding="0" border="0"> 
                                                                    <tbody> 
                                                                        <tr> 
                                                                            <th>处理：</th> 
                                                                            <td><span class="star5" id="item1" v="5"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
                                                                            <td><strong>5</strong> <em>(一般)</em></td>
                                                                        </tr> 
                                                                        <tr> 
                                                                            <th>成果：</th> 
                                                                            <td><span class="star5" id="item2" v="5"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
                                                                            <td><strong>5</strong> <em>(一般)</em></td>
                                                                        </tr> 
                                                                        <tr> 
                                                                            <th>总结：</th> 
                                                                            <td><span class="star5" id="item3" v="5"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
                                                                            <td><strong>5</strong> <em>(一般)</em></td>
                                                                        </tr>
                                                                    </tbody>
                                                            </table>
                                                        </div> 
                                                        <form id="form1" name="form1" action="" method="get">
                                                            <input id="pointV1" type="hidden" value="5" name="pointV1" /> 
                                                            <input id="pointV2" type="hidden" value="5" name="pointV2" /> 
                                                            <input id="pointV3" type="hidden" value="5" name="pointV3" /> 
                                                            <label>评论内容：<textarea id="content" name="content" rows="5" cols="50"></textarea></label>
                                                            <button type="button" id="" class="btn btn-success pull-right" style="margin-right: 100px">评价</button>
                                                        </form>
                                                    </div>

                                            </div>
                                            <div class="form-group"  style="clear:both">
                                                <label for="week_business" class="col-sm-2  control-label">业务开展</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                                        <input type="text" id="week_business" name="week_business" value="{{$weekly_list['week_business']}}" class="form-control week_business" readonly ="readonly"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group  ">
                                                <label for="week_construction" class="col-sm-2  control-label">部门建设</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                                        <input type="text" id="week_construction" name="week_construction" value="{{$weekly_list['week_construction']}}" class="form-control week_construction" readonly ="readonly"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group  ">
                                                <label for="week_cooperation" class="col-sm-2  control-label">跨组合作</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                                        <input type="text" id="week_cooperation" name="week_cooperation" value="{{$weekly_list['week_cooperation']}}" class="form-control week_cooperation" readonly ="readonly"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group  ">
                                                <label for="week_quality" class="col-sm-2  control-label">质量贯彻</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                                        <input type="text" id="week_quality" name="week_quality" value="{{$weekly_list['week_quality']}}" class="form-control week_quality" readonly ="readonly">  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group  ">
                                                <label for="week_secret" class="col-sm-2  control-label">保密管理</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                                        <input type="text" id="week_secret" name="week_secret" value="{{$weekly_list['week_secret']}}" class="form-control week_secret" readonly ="readonly"> 
                                                    </div>
                                                </div>
                                            </div>
               
                                        </div>  
                                    </div>       
                                </div>     



<script data-exec-on-popstate="">
$(document).ready(function () {
    //刷新一次页面
    if(location.href.indexOf("#reloaded")==-1){
        location.href=location.href+"#reloaded";
        location.reload();
    }   

$('.box-body').html($('#my-body'));
var hash = document.location.hash;
if (hash) {
    $('.nav-tabs a[href="' + hash + '"]').tab('show');
}

var  html= $('#task_agent').html();
$('.show_task_agent').on('click',function(){
    var week_id=$(this).attr('week_id');
    var weekly_id=$(this).attr('weekly_id');
    var show_type=$(this).attr('show_type');
    if (show_type==0) {
        $.ajax({
            type: 'POST',//方法类型
            dataType: 'json',//预期服务器返回的数据类型
            url: "get_week" ,//url
            data: {week_id,weekly_id},
            success: function (result) {
                var rows=result.length;
                if (rows==0) {
                   $('#task_agent').html('<h1>当前任务无分解任务</h1>');
                }else{
                    var table=$('<table class="table"><tr><th style="width:70%">任务分解</th><th style="width:30%">经办人</th></tr></table>');
                    var tr=$('');
                        for (var i = 0; i < result.length; i++) {
                            tr=$('<tr><td><textarea name="" class="form-control" id="" cols="5" rows="3" readonly ="readonly">'+result[i].week_task+'</textarea></td><td><textarea name="" class="form-control" id="" cols="5" rows="3" readonly ="readonly">'+result[i].week_agent+'</textarea></td></tr>');
                            table.append(tr);
                        }
                    // console.log(result);//打印服务端返回的数据(调试用)
                    $('#panel-heading').html('<h3 class="panel-title">任务分解</h3>');
                    $('#task_agent').html(table);
                }
            },
            error : function(event) {
                console.log(event)
                alert("异常！");
            }
        });
        $(this).attr('show_type','1');
        $(this).attr('class','btn btn-primary show_task_agent');
    }else{
        $('#panel-heading').html('<h3 class="panel-title">评价区</h3>');
        $('#task_agent').html(html);
        $(this).attr('show_type','0');
        $(this).attr('class','btn btn-default show_task_agent');
    }
    
})
            });
</script>

        <!-- /.box-body -->
    <div class="box-footer">
        <input type="hidden" name="_token" value="CIIoTitVUDt02FlxIgJz8yYKQAiM2GDBiaQoqiiL">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
            <label class="pull-right" style="margin: 5px 10px 0 0;">
            <input type="checkbox" class="after-submit" name="after-save" value="1"> 继续编辑</label>
        </div>
    </div>

        
    </form>
</div>

</div>

<!--     </section>
        </div>
        
    </div>

</div> -->

<script>
    function LA() {}
    LA.token = "CIIoTitVUDt02FlxIgJz8yYKQAiM2GDBiaQoqiiL";
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

