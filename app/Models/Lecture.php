<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Lecture extends Model implements HasMedia
{
    use HasFactory,  InteractsWithMedia, SoftDeletes;
    protected $fillable = ['name','description','group_id','course_id','instructor_id','status'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function instructor()
    {
        return $this->belongsTo(User::class);
    }

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('lecturePC')
            ?  $this->getFirstMediaUrl('lecturePC')
            : asset("admin/images/profile/user.jpg");
    }

    public function getPdfAttribute()
    {
        return $this->getFirstMediaUrl('lecturePDF')
            ?  $this->getFirstMediaUrl('lecturePDF')
            : '';
    }

    public function getVideoAttribute()
    {
        return $this->getFirstMediaUrl('videoLecture')
            ?  $this->getFirstMediaUrl('videoLecture')
            : '';
    }

    public function scopeStatus($query,$arg)
    {
        return $query->where('status',$arg);
    }

}
