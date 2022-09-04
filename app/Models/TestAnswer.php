<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestAnswer extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'test_answer';
    protected $guarded = [];

    public function questions()
    {
        return $this->belongsTo(Question::class,'question_id','id');
    }
}
