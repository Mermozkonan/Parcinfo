<?php

namespace App\Models;

use App\Models\User;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;
    public function profil()
    {
        return $this->belongsToMany(Profil::class, "profil_permissions","permission_id", "profil_id");
    }
    public function user()
    {
        return $this->belongsToMany(User::class, "permission_users","permission_id", "user_id");
    }
}
