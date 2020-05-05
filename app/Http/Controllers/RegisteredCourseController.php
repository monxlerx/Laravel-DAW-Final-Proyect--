<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisteredCourse;
use App\Mail\RegistCourse;
use Illuminate\Support\Facades\Mail;
use Auth;
use DB;
use App\User;
use App\Course;

class RegisteredCourseController extends Controller
{
    public function index ()
    {
        $registeredCourses = RegisteredCourse::with('user','course')->sortable()->paginate(10);
        $courses = Course::get();
        $id = Auth::user()->id;
        $userRegisteredCourses = RegisteredCourse::where('user_id', '=', $id)->get();


        return view('registeredCourse.index', compact('registeredCourses', 'courses', 'userRegisteredCourses'));
    }

    public function create ()
    {
        $users = User::pluck('name','id')->all();
        $courses = Course::pluck('title', 'id')->all();
        $registeredCourses = RegisteredCourse::pluck('user_id','course_id')->all();

        return view('registeredCourse.create', compact('users','courses','registeredCourses', 'id'));
    }

    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
            $email = Auth::user()->email;
            $name = Auth::user();
            $msg = $data;
            $price = DB::table('courses')->select('price')->where('id', '=', $request['course_id'])->get();
            $title = DB::table('courses')->select('title')->where('id', '=', $request['course_id'])->get();

            RegisteredCourse::create($data);
            Mail::to($email)->queue(new RegistCourse($msg, $email, $name, $price, $title));

            return redirect()->route('registeredCourse.index')
                             ->with('sucess_message', 'Registered course was sucessfully added');

        } catch(Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }

    }

    public function show($id)
    {
        $registeredCourse = RegisteredCourse::with('user', 'course')->findOrFail($id);
        return view('registeredCourse.show', compact('registeredCourse'));
    }

    public function edit($id)
    {
        $registeredCourse = RegisteredCourse::findOrFail($id);
        $users = User::pluck('name', 'id')->all();
        $courses = Course::pluck('title', 'id')->all();
        return view('registeredCourse.edit', compact('registeredCourse', 'users', 'courses'));
    }

    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $registeredCourse = RegisteredCourse::findOrFail($id);
            $registeredCourse->update($data);
            return redirect()->route('registeredCourse.index')
                             ->with('success_message', 'Registered  Course was successfully updated.');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function destroy($id)
    {
        try {

            $registeredCourse = RegisteredCourse::findOrFail($id);
            $registeredCourse->delete();
            return redirect()->route('registeredCourse.index')
                ->with('success_message', 'Registered  Course was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    protected function getData(Request $request)
    {
        $rules = [
            'user_id' => 'nullable',
            'course_id' => 'required',
            'status_course' => 'string|nullable',
        ];


        $data = $request->validate($rules);

        return $data;
    }

}
