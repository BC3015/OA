<?php

namespace App\Admin\Extensions\Tools;

// use Encore\Admin\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;
use Illuminate\Support\Facades\Request;
use App\Models\Weekly_list;
use Encore\Admin\Facades\Admin;

class IsCreate extends AbstractTool
{
    protected $week_no;
    
    protected function script()
    {
        $userid=Admin::user()->id;
        $this->week_no=$week_no=date('W',time());
        $week_iscreate=Weekly_list::is_creat(['week_no'=>$this->week_no,'userid'=>$userid]);

        return <<<script
        $('#createButton').on('click',function () {
            if ({$week_iscreate}) {
                var url = "/admin/weekly/create";
                window.location.href = url;
            }else{
                bootbox.alert({
                    size: "big",
                    title: "本周已提交",
                    message: "本周周报已提交，请勿重复提交",
                });
            }
        });
script;
    }
    public function render()    
    {
        Admin::script($this->script());
        return <<<EOT
        <div class="btn-group pull-right" style="margin-right: 10px">
            <a href="#" class="btn btn-sm btn-success" id="createButton" title="新增">
                <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;新增</span>
            </a>
        </div>
EOT;
    }
}