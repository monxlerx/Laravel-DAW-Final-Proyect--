<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exam;
use Carbon\Carbon;
use Kyslik\ColumnSortable\Sortable;

class Date_Exam extends Model
{
    use Sortable;
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'date_exams';

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
                  'date'
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

    public $sortable = ['id', 'exam_id', 'date'];


    public function setDateAttribute($value):void
    {
        $this->attributes['date'] = Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
    }

    public function getDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
    }


    /**
     * Get the exam for this model.
     *
     * @return App\Models\Exam
     */
    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }

}
