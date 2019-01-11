<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Project;
use App\Models\user;


class Task extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['project_id','task_type','nature','personnel','cooperate','describe','end_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    //获取项目名称
    public static function get_project(){
        $projects = Project::all();
        $map = [];
        foreach ($projects as $project) {
            $map[$project->id] = $project->project_name;
        }
        return $map;
    }

    public function get_task()
    {
        return $this->belongsTo(User::class, 'project_id');
    }

    public static function get_task($id){
        return Task::where('project_id',$id)->get();
    }

   
}
