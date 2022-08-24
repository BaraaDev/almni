<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class,'category_id','id');
    }
}
