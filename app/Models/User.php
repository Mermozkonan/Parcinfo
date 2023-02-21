<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Permission;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function permission()
    {
        return $this->belongsToMany(Permission::class, "permission_users","permission_id", "permission_id");
    }
    public function profils()
    {
        return $this->belongsToMany(Profil::class, "profil_users","user_id", "profil_id");
    }

    public function hasprofil($role)
    {
        return $this->profils()->where("libProfil",$role)->first()!==null;
    }
    public function hasAnyprofils($role)
    {
        return $this->profils()->whereIn("libProfil",$role)->first()!==null;
    }

}
