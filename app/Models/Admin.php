<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name','username','email','email_verified_at','password','remember_token'];
}
