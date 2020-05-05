<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cmgmyr\Messenger\Traits\Messagable;
use App\User;

class User extends Authenticatable
{
    use Notifiable;
    use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getId()
    {
        return $this->id;
    }

    public function registeredCourse()
    {
        return $this->hasMany(RegisteredCourse::class);
    }

    public function course()
    {
        return $this->hasOneThrough(Course::class, RegisteredCourse::class);
    }

    public function bookings_stays_abroad()
    {
        return $this->hasMany(Booking_Stays_Abroad::class);
    }

    public function exam_reservation()
    {
        return $this->hasMany(Exam_Reservation::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
