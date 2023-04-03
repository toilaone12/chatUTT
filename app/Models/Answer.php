<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'answer';
    protected $primaryKey = 'id_answer';
    protected $fillable = ['question_list','answer'];
}
