<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Weekly;
use App\Models\Weekly_list;


class Week_task_agent extends Authenticatable
{
    use Notifiable;

    public function weekly_list()
    {
        return $this->belongsTo(Weekly_list::class,'week_id');
    }

    public function weekly()
    {
        return $this->belongsTo(Weekly::class,'week_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['week_id','weekly_id','week_task','week_agent','created_at','updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
