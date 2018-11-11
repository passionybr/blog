<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class UserType extends Model
{
    protected $primaryKey = 'user_type_id';
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'modified_time';
}