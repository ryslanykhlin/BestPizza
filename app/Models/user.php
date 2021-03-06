<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['name','email','password','isAdmin'];

    protected $hidden = ['remember__token',];

    public function getisAdmin()
    {
        return $this->isAdmin;
    }
}
