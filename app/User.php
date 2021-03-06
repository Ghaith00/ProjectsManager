<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname','email','username', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The projects that belong to the user
     */
    public function projects(){
      return $this->hasMany('App\Project');
    }
    /**
     * The tasks that belong to the user 
     */
    public function tasks(){
      return $this->belongsToMany('App\Task', 'task_user', 'user_id', 'task_id');
    }
}
