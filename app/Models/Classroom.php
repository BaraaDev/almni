<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Classroom extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = ['name','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('classroom')
            ?  $this->getFirstMediaUrl('classroom')
            : asset("admin/images/classroom/classroom.jpeg");
    }

    public function scopeStatus($query,$arg)
    {
        return $query->where('status',$arg);
    }
}
