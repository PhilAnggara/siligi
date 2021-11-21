<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'username',
        'profile_pic',
        'email',
        'id_dinas',
        'jabatan',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function uploads()
    {
        return $this->hasMany(Upload::class, 'id_user', 'id');
    }
    public function latestUpload()
    {
        return $this->hasOne(Upload::class, 'id_user', 'id')->latest();
    }

    public function musrembang()
    {
        return $this->hasMany(Musrembang::class, 'id_user', 'id');
    }
    public function latestMusrembang()
    {
        return $this->hasOne(Musrembang::class, 'id_user', 'id')->latest();
    }
}
