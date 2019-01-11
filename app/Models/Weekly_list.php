<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Weekly;
use App\Models\Week_task_agent;
use Illuminate\Http\Request;


class Weekly_list extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','userid','week_no','week_business','week_construction','week_cooperation','week_quality','week_secret','weekly_status','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    //
    public function  weekly()
    {
        return $this->hasMany(Weekly::class,'weekly_id');
    }

    // public function  week_task_agents()
    // {
    //     return $this->hasMany(Week_task_agent::class,'week_id'); 
    // }

    public static function is_creat($arr)
    {
        //查询当前周是否提交过周报
        $is_creat = Weekly_list::where($arr)->first();
        //如果为空，跳转表单页面
        if (is_null($is_creat)) {
            return 'true';
        }else{
            return 'false';
        }
    }

    public static function getweekly($arr)
    {
        //查询当前周是否提交过周报
        $weekly_id='';
        $isset=Weekly_list::where($arr)->pluck('id')->toArray();
        if (count($isset) == 0) {
            $weekly_id='';
        }else{
            $weekly_id=$isset['0'];
        }
        return Weekly::where('weekly_id',$weekly_id)->pluck('week_work','id')->toArray();
    }

    // public static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($model) {
    //         echo "<pre>";
    //         var_dump($model);die;

    //     });
    // }
}
