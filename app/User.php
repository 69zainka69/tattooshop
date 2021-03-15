<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;


class UserSclad extends Model {
    protected $table = 'users_sclads';
    protected $fillable = [
        'user_id', 'sclad_id',
    ];
    public $timestamps = false;
}


class User extends Authenticatable
{
    use Notifiable, HasRoles;
  /**
     * Связь «один ко многим» таблицы `users` с таблицей `profiles`
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profiles() {
        return $this->hasMany(Profile::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone', 'adress_1', 'adress_2', 'vean'
    ];

    public function fullName() {
        return $this->first_name.' '.$this->last_name;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sclads() {
        return $this->hasManyThrough(Sclad::class, UserSclad::class, 'user_id', 'id', 'id', 'sclad_id');
    }

    public function mapSclads() {
        $func = function ($i) {
            return $i['id'];
        };
        return array_map($func, $this->sclads->toArray());
    }
}
