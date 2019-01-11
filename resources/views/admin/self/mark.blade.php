
<div class="panel box box-primary" style="margin-bottom: 0px">
        <div class="box-header with-border">
            <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion-5c2c51fdde847" href="#collapse1">
                    Orders
                </a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse ">
            <div class="box-body">
                213
            </div>
        </div>
    </div>
<!-- 折叠 -->

<div id="my-body">

                    
        <div class="col-md-12"><div class="box box-info">
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

                            <div class="fields-group">

                                                    <div class="form-group">
    <label  class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
        <div id="my-body">

                            <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">

                    <li class="active">
                <a href="#tab-form-1" data-toggle="tab">
                    本周本组进行的任务 <i class="fa fa-exclamation-circle text-red hide"></i>
                </a>
            </li>
                    <li>
                <a href="#tab-form-2" data-toggle="tab">
                    围绕五个重点总体回顾 <i class="fa fa-exclamation-circle text-red hide"></i>
                </a>
            </li>
        
    </ul>
    <div class="tab-content fields-group">


                    <div class="tab-pane active" id="tab-form-1">
                                    <input type="hidden" name="week_no" value="52" class="week_no">

                                    <input type="hidden" name="userid" value="1" class="userid">

                                    <input type="hidden" name="weekly_status" value="0" class="weekly_status">


                    <div class="tab-pane active" id="tab-form-1">   
                                    <input type="hidden" name="week_no" value="{{$week_no}}" class="week_no">

                                    <input type="hidden" name="userid" value="{{$userid}}" class="userid">

                                    <input type="hidden" name="weekly_status" value="0" class="weekly_status">

                                    <div class="row">
    <div class="col-sm-2 "><h4 class="pull-right">本周任务</h4></div>
    <div class="col-sm-8"></div>
</div>


<hr style="margin-top: 0px;">

<div id="has-many-weekly" class="has-many-weekly">

    <div class="has-many-weekly-forms">

            </div>

    <template class="weekly-tpl">
        <div class="has-many-weekly-form fields-group">

            <div class="form-group  ">

    <label for="week_work" class="col-sm-2  control-label">本周任务</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_work" name="weekly[new___LA_KEY__][week_work]" value="" class="form-control weekly week_work" placeholder="输入 本周任务">

            
        </div>

        
    </div>
</div><div class="form-group  ">

    <label for="week_results" class="col-sm-2  control-label">输出成果</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_results" name="weekly[new___LA_KEY__][week_results]" value="" class="form-control weekly week_results" placeholder="输入 输出成果">

            
        </div>

        
    </div>
</div><div class="row">
    <div class="col-sm-2 "><h4 class="pull-right">任务分解及经办人</h4></div>
    <div class="col-sm-8"></div>
</div>

<hr style="margin-top: 0px;">

<div id="has-many-week_task_agents" class="has-many-week_task_agents">

    <div class="has-many-week_task_agents-forms">

            </div>

    <template class="week_task_agents-tpl">
        <div class="has-many-week_task_agents-form fields-group">

            <div class="form-group  ">

    <label for="week_task" class="col-sm-2  control-label"></label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_task" name="week_task_agents[new___LA_KEY__][week_task]" value="" class="form-control week_task_agents week_task" placeholder="输入 任务分解">

            <input type="text" id="week_agent" name="week_task_agents[new___LA_KEY__][week_agent]" value="" class="form-control week_task_agents week_agent" placeholder="输入 经办人">
        </div>

        
    </div>
</div><input type="hidden" name="week_task_agents[new___LA_KEY__][id]" value="" class="week_task_agents id">
<input type="hidden" name="week_task_agents[new___LA_KEY__][_remove_]" value="0" class="week_task_agents _remove_ fom-removed">


            <div class="form-group">
                <label class="col-sm-2  control-label"></label>
                <div class="col-sm-8">
                    <div class="remove-task btn btn-warning btn-sm pull-right"><i class="fa fa-trash"></i>&nbsp;移除当前任务分解</div>
                </div>
            </div>
            
        </div>
    </template>

    <div class="form-group">
        <label class="col-sm-2  control-label"></label>
        <div class="col-sm-8">
            <div class="add-task-btn btn btn-info btn-sm"><i class="fa fa-save"></i>&nbsp;新增任务分解</div>
            <hr>
        </div>
    </div>

</div><input type="hidden" name="weekly[new___LA_KEY__][id]" value="" class="weekly id">
<input type="hidden" name="weekly[new___LA_KEY__][_remove_]" value="0" class="weekly _remove_ fom-removed">


            <div class="form-group">
                <label class="col-sm-2  control-label"></label>
                <div class="col-sm-8">
                    <div class="remove btn btn-danger btn-sm pull-right"><i class="fa fa-trash"></i>&nbsp;移除当前任务</div>
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

<div id="has-many-weekly-table" class="has-many-weekly">
    <table class="table table-hover">
    <!-- table-condensed  紧凑-->
        <thead>
            <tr>
                <th width="25%">本周任务</th>
                <th width="20%">输出成果</th>
                <th width="40%">任务分解</th>
                <th width="10%">操作</th>
            </tr>
        </thead>
        <tbody class="has-many-weekly-forms-table">
            
            <template class="weekly-tpl-table">
                <tr class="has-many-weekly-form-table">
                    <td><textarea name="weekly[new___LA_KEY__][week_work]" class="form-control weekly week_work" id="" cols="50" rows="3" placeholder="输入 本周任务"></textarea></td>
                    <td><textarea name="weekly[new___LA_KEY__][week_results]" class="form-control weekly week_results" id="" cols="30" rows="3" placeholder="输入 输出成果"></textarea></td>
                    <td>
                        <div id="has-many-week_task_agents-table" class="has-many-week_task_agents-table">
                        <div class="has-many-week_task_agents-forms-table"></div>
                        <template class="week_task_agents-tpl-table">
                            <div class="has-many-week_task_agents-form-table fields-group">
                                <label for="week_task" class="col-sm-2  control-label"></label>
                                <div class="input-group">
                                <textarea name="week_task_agents[new___LA_KEY__][week_task]" id="week_task" cols="30" rows="3" class="week_task_agents week_task" placeholder="输入 任务分解" style="margin-left: -30px"></textarea>
                                <textarea name="week_task_agents[new___LA_KEY__][week_agent]" id="week_agent" cols="15" rows="3" class="week_task_agents week_agent" placeholder="输入 经办人" style="margin-left: 10px"></textarea>
                                    <input type="hidden" name="week_task_agents[new___LA_KEY__][id]" value="" class="week_task_agents id">
                                    <input type="hidden" name="week_task_agents[new___LA_KEY__][_remove_]" value="0" class="week_task_agents _remove_ fom-removed-table">
                                    <button class="remove-task_agents-table btn btn-warning btn-sm " style="margin-left: 100px;margin-bottom: 5px"><i class="fa fa-trash"></i>&nbsp;移除当前任务分解</button>
                                </div>
                            </div>
                        </template>
                        <div class="add-task-table btn btn-info btn-sm"><i class="fa fa-save"></i>&nbsp;新增任务分解</div>
                        </div>
                    </td>
                    <td>
                    </div>
                        <input type="hidden" name="weekly[new___LA_KEY__][id]" value="" class="weekly id">
                        <input type="hidden" name="weekly[new___LA_KEY__][_remove_]" value="0" class="weekly _remove_ fom-removed">
                        <div class="remove-table btn btn-danger btn-sm "><i class="fa fa-trash"></i>移除当前任务</div>
                    </td>
                </tr>
            </template>

        </tbody>
    </table>
    <div class="add-table btn btn-success btn-sm"><i class="fa fa-save"></i>&nbsp;新增任务行</div>
</div>

</div>  <!-- div 不能删 -->

                    <div class="tab-pane " id="tab-form-2">
                                    <div class="form-group  ">

    <label for="week_business" class="col-sm-2  control-label">业务开展</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_business" name="week_business" value="" class="form-control week_business" placeholder="输入 业务开展">

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="week_construction" class="col-sm-2  control-label">部门建设</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_construction" name="week_construction" value="" class="form-control week_construction" placeholder="输入 部门建设">

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="week_cooperation" class="col-sm-2  control-label">跨组合作</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_cooperation" name="week_cooperation" value="" class="form-control week_cooperation" placeholder="输入 跨组合作">

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="week_quality" class="col-sm-2  control-label">质量贯彻</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_quality" name="week_quality" value="" class="form-control week_quality" placeholder="输入 质量贯彻">

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="week_secret" class="col-sm-2  control-label">保密管理</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="week_secret" name="week_secret" value="" class="form-control week_secret" placeholder="输入 保密管理">

            
        </div>

        
    </div>
</div>
                            </div>
        

    </div>

    </div>  

</div>       
</div>     

<script data-exec-on-popstate="">


    $(function () {

    $(function () {
// $(document).on("change","input,textarea,select",function(){
//     window.onbeforeunload = function(event) {
//           return "您编辑的信息尚未保存，您确定要离开吗？"
//     };
// });

        //自定义//
$("form").submit( function () { 
    var d ={};
    var data = $('form').serializeArray();


    $.each(data, function () {
        d[this.name] = this.value;
    });
    //ajax提交

    // console.log(data)
    

    console.log(data);
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: "add" ,//url
        data: data,
        success: function (result) {
            console.log(result);
            // if (result.responseText) {
            //     alert("SUCCESS");
            // };

        },
        error : function(event) {
            console.log(event)
            // alert("异常！");
        }
    });
    // console.log(JSON.stringify(d));

} );


        ////////

        ////////
        

$('.box-body').html($('#my-body'));
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


$(document).on('click', '.add-task-btn', function () {
    var tpl = $(this).parents('.has-many-week_task_agents').find('template.week_task_agents-tpl');
index = 0;
    index++;

    var template = tpl.html().replace(/__LA_KEY__/g, index);
    $(this).parents('.has-many-week_task_agents').find('.has-many-week_task_agents-forms').append(template);
    
});

$(document).on('click', '.remove-task', function () {
    $(this).closest('.has-many-week_task_agents-form').hide();
    $(this).closest('.has-many-week_task_agents-form').find('.fom-removed').val(1);
});

$('#has-many-weekly').on('click', '.add', function () {

    var tpl = $('template.weekly-tpl');
index = 0;
    index++;

    var template = tpl.html().replace(/__LA_KEY__/g, index);
    $('.has-many-weekly-forms').append(template);
    
});

$('#has-many-weekly').on('click', '.remove', function () {
    $(this).closest('.has-many-weekly-form').hide();
    $(this).closest('.has-many-weekly-form').find('.fom-removed').val(1);
});

            });
</script>
<!-- ajax提交 -->

    var     index_tr = 0;
$('#has-many-weekly-table').on('click', '.add-table', function () {
    var tpl = $('template.weekly-tpl-table');
    index_tr++;
    console.log(index_tr)

    var template = tpl.html().replace(/__LA_KEY__/g, index_tr);
    $('.has-many-weekly-forms-table').append(template);
});
$('#has-many-weekly-table').on('click', '.remove-table', function () {
    $(this).closest('.has-many-weekly-form-table').hide();
    $(this).closest('.has-many-weekly-form-table').find('.fom-removed-table').val(1);
});
        var index = 0;
$(document).on('click', '.add-task-table', function () {
    var tpl = $(this).parents('.has-many-week_task_agents-table').find('template.week_task_agents-tpl-table');

    // var index_td=$(this).parents('.has-many-week_task_agents-table').find();
    index++;

    var arr=new Array();
    arr.push(index_tr);
    arr.push(index);
    var index_td=arr.join("-");
    console.log(index_td)

    var template = tpl.html().replace(/__LA_KEY__/g, index);
    $(this).parents('.has-many-week_task_agents-table').find('.has-many-week_task_agents-forms-table').append(template);
    
});
$(document).on('click', '.remove-task_agents-table', function () {
    $(this).closest('.has-many-week_task_agents-form-table').hide();
    $(this).closest('.has-many-week_task_agents-form-table').find('.fom-removed-table').val(1);
});
            });
</script>

        <!-- /.box-body -->

        <div class="box-footer">

    <input type="hidden" name="_token" value="CIIoTitVUDt02FlxIgJz8yYKQAiM2GDBiaQoqiiL">

    <div class="col-md-2">
    </div>

    <div class="col-md-8">

                <div class="btn-group pull-right">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>

                <label class="pull-right" style="margin: 5px 10px 0 0;">
            <input type="checkbox" class="after-submit" name="after-save" value="1"> 继续编辑
        </label>
        
        
        
        
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


