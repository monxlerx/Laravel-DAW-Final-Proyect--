<?php

namespace App;
use App\Course;
use App\Teacher;
use App\RegisteredCourse;
use Kyslik\ColumnSortable\Sortable;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use Sortable;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';

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
                  'title',
                  'description',
                  'type_course',
                  'company',
                  'price',
                  'teacher_id'
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

    public $sortable = ['id', 'title', 'description', 'type_course', 'company', 'price', 'teacher_id'];

    /**
     * Get the teacher for this model.
     *
     * @return App\Models\Teacher
     */
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function registeredcourse()
    {
        return $this->hasMany(RegisteredCourse::class);
    }
}
