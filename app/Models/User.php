<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

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

    /**
     * Set the user's password.
     *
     * @param  string  $password
     * @return void
     */
    // public function setPasswordAttribute($password)
    // {
    //     // Cek apakah password baru tidak kosong dan apakah password baru tidak sama dengan password sebelumnya
    //     if (!empty($password) && $this->password !== $password) {
    //         $this->attributes['password'] = bcrypt($password);
    //     }
    // }
}