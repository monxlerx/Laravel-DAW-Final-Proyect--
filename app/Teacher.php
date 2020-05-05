<?php

namespace App;
use App\Course;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Teacher extends Model
{
    use Sortable;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';

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
                  'course_id',
                  'firstname',
                  'last_name',
                  'skills'
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

    public $sortable = ['id', 'course_id', 'firstname', 'last_name', 'skills'];

    /**
     * Get the course for this model.
     *
     * @return App\Models\Course
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
