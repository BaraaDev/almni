<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','description','level_id',
        'course_id','start_date','months','days','time_start',
        'time_end','classroom_id','status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'days' => 'array',
    ];



    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class,
            'group_student',
            'group_id',
            'student_id');
    }

    public function instructor()
    {
        return $this->belongsToMany(User::class,
            'group_user',
            'group_id',
            'user_id');
    }

    public function format()
    {
        return $this->hasMany(Format::class,'group_id','id');
    }


    public function scopeStatus($query,$arg)
    {
        return $query->where('status',$arg);
    }
}
