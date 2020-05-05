<?php

namespace App;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use Sortable;
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exams';

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
                  'level',
                  'description',
                  'price'
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

    public $sortable = ['id', 'level', 'description', 'price'];

    public function exam_reservation()
    {
        return $this->hasMany(Exam_Reservation::class);
    }

    public function date_exam()
    {
        return $this->hasMany(Date_Exam::class);
    }

}
