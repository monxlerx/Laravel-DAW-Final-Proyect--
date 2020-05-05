<?php

namespace App\Http\Controllers;
use App\RegisteredCourse;
use App\Teacher;
use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
     /**
     * Display a listing of the courses.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $courses = Course::with('teacher')->sortable()->paginate(10);

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new course.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $teachers = Teacher::pluck('created_at','id')->all();

        return view('courses.create', compact('teachers'));
    }

    /**
     * Store a new course in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            Course::create($data);

            return redirect()->route('courses.index')
                ->with('success_message', 'Course was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified course.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $course = Course::with('teacher')->findOrFail($id);

        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified course.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $teachers = Teacher::pluck('created_at','id')->all();

        return view('courses.edit', compact('course','teachers'));
    }

    /**
     * Update the specified course in the storage.
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

            $course = Course::findOrFail($id);
            $course->update($data);

            return redirect()->route('courses.index')
                ->with('success_message', 'Course was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified course from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $course = Course::findOrFail($id);
            $course->delete();

            return redirect()->route('courses.index')
                ->with('success_message', 'Course was successfully deleted.');
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
            'title' => 'string|min:1|max:255|required',
            'description' => 'string|min:1|max:1000|required',
            'type_course' => 'string|min:1|required',
            'company' => 'string|min:1|nullable',
            'price' => 'integer|min:1|required',
            'teacher_id' => 'nullable',
        ];


        $data = $request->validate($rules);




        return $data;
    }
}
