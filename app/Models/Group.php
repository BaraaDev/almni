<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'group_user');
    }

    public function scopeStatus($query,$arg)
    {
        return $query->where('status',$arg);
    }
}
