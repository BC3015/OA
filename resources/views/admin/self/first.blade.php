

<div id="my-body">
                            <div class="nav-tabs-custom">

    <div class="tab-content fields-group">

                    <div class="tab-pane active" id="tab-form-1">
                                    <input type="hidden" name="week_no" value="52" class="week_no">

                                    <input type="hidden" name="userid" value="1" class="userid">

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

<script data-exec-on-popstate="">

    $(function () {
        //自定义//
$("form").submit( function () { 
    var d ={};
    var data = $('form').serializeArray();
    $.each(data, function () {
        d[this.name] = this.value;
    });
    //ajax提交
    // console.log(data)
    $.ajax({
        type: 'POST',//方法类型
        dataType: 'json',//预期服务器返回的数据类型
        url: "add" ,//url
        data: data,
        success: function (result) {
            console.log(result);//打印服务端返回的数据(调试用)
            if (result.responseText) {
                alert("SUCCESS");
            };
        },
        error : function(event) {
            console.log(event)
            // alert("异常！");
        }
    });
    // console.log(JSON.stringify(d));
    return false;
} );

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