<?php

namespace App;
use Carbon\Carbon;
use App\User;
use Auth;
use App\Stays_Abroad;
use Kyslik\ColumnSortable\Sortable;


use Illuminate\Database\Eloquent\Model;

class Booking_Stays_Abroad extends Model
{
    use Sortable;
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'booking__stays__abroads';

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
                  'id_stays_abroad',
                  'user_id',
                  'status',
                  'departure_date',
                  'return_date',
                  'number_weeks',
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

    public $sortable = ['id', 'id_stays_abroad', 'user_id', 'status', 'departure_date', 'return_date', 'number_weeks', 'created_at'];

     /**
     * Set and get the departure_date
     *
     * @param  string  $value
     * @return void
     */

    public function setDepartureDateAttribute($value):void
    {
        $this->attributes['departure_date'] = Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
    }

    public function getDepartureDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
    }


    /**
     * Set and get the return_date.
     *
     * @param  string  $value
     * @return void
     */

    public function setReturnDateAttribute($value):void
    {
        $this->attributes['return_date'] = Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
    }

    public function getReturnDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
    }

    public function stays_abroad()
    {
        return $this->belongsTo(Stays_Abroad::class, 'id_stays_abroad');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
