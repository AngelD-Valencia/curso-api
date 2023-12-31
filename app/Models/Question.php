<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ["name", "alternative1","alternative2","alternative3","alternative4","alternative5", "state", "exam_id"];
}
