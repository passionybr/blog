<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';
    const CREATED_AT = 'created_time';
	 
}