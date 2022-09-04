<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = ['title','slug','description','short_description','course_date','price','discount','level_id','subject_id','category_id','status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class,'course_id','id');
    }


    public function groups()
    {
        return $this->hasMany(Group::class,'course_id','id');
    }


    public function courseInstructor()
    {
        return $this->belongsToMany(User::class,'course_instructor',
            'course_id', 'instructor_id');
    }


    public function courseStudent()
    {
        return $this->belongsToMany(User::class,'course_user','student_id','course_id');
    }

    public function format()
    {
        return $this->hasMany(Format::class,'course_id','id');
    }


    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('course')
            ?  $this->getFirstMediaUrl('course')
            : asset("admin/images/courses/course.jpg");
    }

    public function getVideoAttribute()
    {
        return $this->getFirstMediaUrl('videoCourse')
            ?  $this->getFirstMediaUrl('videoCourse')
            : '';
    }
    public function scopeStatus($query,$arg)
    {
        return $query->where('status',$arg);
    }
}
