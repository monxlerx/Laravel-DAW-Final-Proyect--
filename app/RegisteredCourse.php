<?php

namespace App;
use App\RegisteredCourse;
use App\User;
use App\Course;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

class RegisteredCourse extends Model
{
    use Sortable;
    /**
    * The database table used by the model.
    *
    * @var string
    */
   protected $table = 'registered__courses';

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
                 'user_id',
                 'course_id',
                 'status_course',
                 'feedback',
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

   public $sortable = ['id', 'user_id', 'course_id', 'status_course', 'feedback', 'created_at'];

   /**
    * Get the user for this model.
    *
    * @return App\Models\User
    */
   public function user()
   {
       return $this->belongsTo(User::class);
   }

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
