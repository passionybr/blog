<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';
    const CREATED_AT = 'created_time';
    
    public $rules = [
            'username' => 'required|unique:users|max:50'
        ];
    public $messages = [
        'required' => 'The :attribute is mandatory'
    ];
}