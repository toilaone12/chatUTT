<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'room';
    protected $primaryKey = 'id_room';
    protected $fillable = ['id_user','code_history','name_room'];
}
