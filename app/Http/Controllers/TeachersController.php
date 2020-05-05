<?php

namespace App\Http\Controllers;
use App\Teacher;
use App\User;
use App\Course;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
      /**
     * Display a listing of the teachers.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $teachers = Teacher::with('course')->sortable()->paginate(10);
        $showTeachers = Teacher::select('firstname', 'last_name', 'skills')->distinct('firstname', 'last_name', 'skills', 'id', 'course_id')->get();

        return view('teachers.index', compact('teachers', 'showTeachers'));
    }

    /**
     * Show the form for creating a new teacher.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $courses = Course::pluck('title','id')->all();

        return view('teachers.create', compact('courses'));
    }

    /**
     * Store a new teacher in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            Teacher::create($data);

            return redirect()->route('teachers.index')
                ->with('success_message', 'Teacher was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified teacher.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $teacher = Teacher::with('course')->findOrFail($id);

        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified teacher.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $courses = Course::pluck('title','id')->all();

        return view('teachers.edit', compact('teacher','courses'));
    }

    /**
     * Update the specified teacher in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $teacher = Teacher::findOrFail($id);
            $teacher->update($data);

            return redirect()->route('teachers.index')
                ->with('success_message', 'Teacher was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified teacher from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $teacher = Teacher::findOrFail($id);
            $teacher->delete();

            return redirect()->route('teachers.index')
                ->with('success_message', 'Teacher was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'course_id' => 'required',
            'firstname' => 'string|min:1|required',
            'last_name' => 'string|min:1|required',
            'skills' => 'string|min:1|nullable',
        ];


        $data = $request->validate($rules);


        return $data;
    }
}
