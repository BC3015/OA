<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Week_task_agent;
use App\Models\Weekly_list;

class Weekly extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','weekly_id','week_work','week_results','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function  week_task_agent()
    {
        return $this->hasMany(Week_task_agent::class,'week_id'); 
    }

    public static function  Weekly_list()
    {
        return $this->belongsTo(Weekly_list::class,'weekly_id'); 
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            echo "<pre>";
            var_dump($model);die;

        });
    }

}
