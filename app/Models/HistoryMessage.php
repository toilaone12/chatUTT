<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryMessage extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'history_message';
    protected $primaryKey = 'id_history';
    protected $fillable = ['id_user','code_history','question','answer'];
}
