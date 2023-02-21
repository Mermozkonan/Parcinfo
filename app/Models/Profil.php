<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;
    public function permission()
    {
        return $this->belongsToMany(Permission::class, "profil_permissions","profil_id", "permission_id");
    }
    public function users()
    {
        return $this->belongsToMany(User::class, "profil_users","profil_id", "user_id");
    }

}
