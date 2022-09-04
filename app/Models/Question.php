<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Question extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['question','description','answer_explanation','instructor_id','format_id'];

    public function setTopicIdAttribute($input)
    {
        $this->attributes['format_id'] = $input ? $input : null;
    }

    public function format()
    {
        return $this->belongsTo(Format::class);
    }
    public function options()
    {
        return $this->hasMany(QuestionsOption::class, 'question_id')->withTrashed();
    }
}
