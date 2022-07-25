<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name','username', 'nickname','password', 'email', 'bio', 'age', 'job', 'phone', 'phone2', 'address', 'postal_code',
        'location', 'city_id', 'level_id',  'initial_price','final_price','test_date','userType','status','whatsApp',
        'facebook','twitter','linkedin','AskFM','YouTube','website','instagram'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'api_token',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class,'group_student','student_id','group_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class,'subject_instructor','instructor_id','subject_id');
    }


    public function courseInstructor()
    {
        return $this->belongsToMany(User::class,'course_instructor','course_id','instructor_id');
    }

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('user')
            ?  $this->getFirstMediaUrl('user')
            : asset("admin/images/profile/user.jpg");
    }
    public function scopeStatus($query,$arg)
    {
        return $query->where('status',$arg);
    }

    public function scopeType($query,$arg)
    {
        return $query->where('userType',$arg);
    }

}
