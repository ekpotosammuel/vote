<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role;

class UserRole extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    /*
    |----------------------------------------------------------------------------------
    | Role Relationship  To User Role
    |----------------------------------------------------------------------------------
    */
    public function role(){
        return $this->belongsTo(Role::class);
    }
    protected $fillable = [
        'user_id',
        'role_id',
    ];
}
