<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'role_id'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'assigned_roles');
    }

    //Ahora roles es un array y no podemos buscar la propiedad name de un array por lo cual recorremos cada objeto del array
    public function hasRoles(array $roles)
    {
        foreach ($roles as $role)
        {
            foreach ($this->roles as $userRole) {//una ves dentro del objeto del array buscamos su propiedad name
                if ($userRole->name ===  $role)
                {
                    return true;
                }
            }
        }
        return false;
    }

    public function isAdmin()
    {
        return $this->hasRoles(['admin']);
    }
}
