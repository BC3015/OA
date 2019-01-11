<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Project extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code_id','project_name','nature','describe','results','document','personnel'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    // public function getDocumentAttribute($value)
    // {
    //     return explode(',', $value);
    // }
    public function setDocumentAttribute($value)
    {
        $this->attributes['document'] = implode(',', $value);
    }
    
    // public function getPersonnelAttribute($value)
    // {
    //     return explode(',', $value);
    // }
    public function setPersonnelAttribute($value)
    {
        $this->attributes['personnel'] = implode(',', $value);
    }
}
