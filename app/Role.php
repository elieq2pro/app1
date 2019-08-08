<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'display_name', 'description',
    ];

    public function user()
    {
    	//hasOne() para devolver uno
    	//hasMany() para devolver todos
		return $this->hasMany(User::class);
    }
}
