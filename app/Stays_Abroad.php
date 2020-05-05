<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Kyslik\ColumnSortable\Sortable;


class Stays_Abroad extends Model
{
    use Sortable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stays_abroads';

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
                  'location',
                  'county',
                  'nation',
                  'country',
                  'school',
                  'accommodation',
                  'landmarks',
                  'price_week'
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

    public $sortable = ['id', 'location', 'county', 'nation', 'country', 'school', 'accommodation', 'landmarks', 'price_week'];

    /**
     * Set the return_date.
     *
     * @param  string  $value
     * @return void
     */


    public function booking_stays_abroad()
    {
        return $this->belongsTo(Booking_Stays_Abroad::class, 'id');
    }

}
