<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Subject extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = ['name','status'];

    public function instructor()
    {
        return $this->belongsToMany(User::class,'subject_instructor');
    }

    public function scopeStatus($query,$arg)
    {
        return $query->where('status',$arg);
    }


    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('subject')
            ?  $this->getFirstMediaUrl('subject')
            : '';
    }
}
