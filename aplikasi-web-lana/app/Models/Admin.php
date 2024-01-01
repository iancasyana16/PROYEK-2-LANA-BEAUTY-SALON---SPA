<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory, HasApiTokens, Notifiable, CanResetPassword;

    /**
     * The atributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'admin';
    protected $primaryKey = 'idAdmin';
    protected $fillable = [
        'namaAdmin',
        'emailAdmin',
        'password',
        'no_hp',
    ];

    /**
     * The atributes that should be hidden for serilization.
     *
     * @var array<int, string>
     */

     protected $hidden = [
        'password',
        'remember_token',
     ];

     /**
     * The atributes that should be cast
     *
     * @var array<int, string>
     */

     protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
     ];

     /**
      * change user password.
      *
      * @param string $oldPassword
      * @param string $newPassword
      * @return bool
      */

}
