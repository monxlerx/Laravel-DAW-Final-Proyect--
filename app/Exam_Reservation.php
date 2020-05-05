<?php

namespace App;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Exam_Reservation extends Model
{
    use Sortable;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exam_reservations';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'exam_id',
                  'user_id',
                  'booking_date',
                  'status'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    public $sortable = ['id', 'exam_id', 'user_id', 'booking_date', 'status', 'created_at'];


    public function setBookingDateAttribute($value):void
    {
        $this->attributes['booking_date'] = Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
    }

    public function getBookingDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the course for this model.
     *
     * @return App\Models\Course
     */
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function date_exam()
    {
        return $this->hasOneThrough(Date_Exam::class, Exam::class);
    }


}
