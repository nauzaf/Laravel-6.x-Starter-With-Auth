<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    
    public $timestamps = false;
    
    protected $fillable = [
		'role_name'
	];

    public function users()
    {
        return $this->belongsToMany(User::class)->using(UserRole::class);
    }

}
