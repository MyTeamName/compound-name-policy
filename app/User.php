<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Posts created by User.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Compound Names created by User.
     */
    public function compoundNames()
    {
        return $this->hasMany(CompoundName::class);
    }

    /**
     * Is the user an administrator.
     */
    public function isAdmin()
    {
        return $this->id == 1;
    }
}
