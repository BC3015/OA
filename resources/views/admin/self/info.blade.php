<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">周报详情</h3>
            <div class="box-tools">
                <div class="btn-group pull-left" style="margin-left: 5px">
                    <a href="http://laravel_admin.com/admin/weekly/{{$weekly_list['id']}}/edit" class="btn btn-sm btn-warning" title="列表"><span class="hidden-xs">&nbsp;返回修改</span></a>
                    <a href="#" id="true" bgm="{{$weekly_list['id']}}" class="btn btn-sm btn-success" title="列表"><span class="hidden-xs">&nbsp;确认提交</span></a>
                </div>
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
                                            <div style="width: 35%;height: 400px ;background-color: #F5F5F5;float: left;overflow:auto;" id="task_agent" >
                                                <h2>此处放置提示说明</h2>
                                                <p>最恰当的方法是点击一次显示任务分解进行查看，再点击按钮关闭查看。之后再点击其他行按钮进行查看任务分解。</p>
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
                    console.log(result);//打印服务端返回的数据(调试用)
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
        $('#task_agent').html(html);
        $(this).attr('show_type','0');
        $(this).attr('class','btn btn-default show_task_agent');
    }
    
})
$("#true").on('click', function () { 
    var weekly_list_id=$(this).attr('bgm');
    $.ajax({
            type: 'POST',//方法类型
            dataType: 'json',//预期服务器返回的数据类型
            url: "is_submit" ,//url
            data: {weekly_list_id},
            success: function (result) {
                    if (result=='success') {
                            bootbox.alert({ 
                            size: "small",
                            title: "周报提示",
                            message: "提交成功！", 
                            callback: function(){
                                //验证成功后实现跳转
                                window.location.href = "/admin/weekly"}
                        });
                    }
            },
            error : function(event) {
                console.log(event)
                alert("异常！");
            }
        });
    
} );
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

