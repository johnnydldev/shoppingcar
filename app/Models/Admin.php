<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{

use HasFactory;
 use Notifiable;
 /**
 * Atributos que pueden ser asignados en masa.
 *
 * @var array
 */
 protected $fillable = [
 'name', 'email', 'password',
 ];
 /**
 * Atributos ocultos en los arrays.
 *
 * @var array
 */
 protected $hidden = [
 'password', 'remember_token',
 ];
 /**
 * atributos que deben ser casteados del tipo nativo.
 *
 * @var array
 */
 protected $casts = [
 'email_verified_at' => 'datetime',
 ];

}
