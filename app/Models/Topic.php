<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public $fillable = [
        'course_id',
        'module_id',
        'chapter_id',
        'topic_description',
        'topic_name'
    ];
}
