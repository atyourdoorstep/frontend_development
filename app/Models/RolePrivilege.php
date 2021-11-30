<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePrivilege extends Model
{
    use HasFactory;
    protected $fillable = [
        'privilege_id',
        'role_id',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function privilege()
    {
        return $this->belongsTo(Privilege::class);
    }

}
