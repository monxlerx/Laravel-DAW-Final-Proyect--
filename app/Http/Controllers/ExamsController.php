<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;

class ExamsController extends Controller
{

    /**
     * Display a listing of the exams.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $exams = Exam::sortable()->paginate(10);

        return view('exams.index', compact('exams'));
    }

    /**
     * Show the form for creating a new exam.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {


        return view('exams.create');
    }

    /**
     * Store a new exam in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            Exam::create($data);

            return redirect()->route('exams.index')
                ->with('success_message', 'Exam was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified exam.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $exam = Exam::findOrFail($id);

        return view('exams.show', compact('exam'));
    }

    /**
     * Show the form for editing the specified exam.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $exam = Exam::findOrFail($id);


        return view('exams.edit', compact('exam'));
    }

    /**
     * Update the specified exam in the storage.
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

            $exam = Exam::findOrFail($id);
            $exam->update($data);

            return redirect()->route('exams.index')
                ->with('success_message', 'Exam was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified exam from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $exam = Exam::findOrFail($id);
            $exam->delete();

            return redirect()->route('exams.index')
                ->with('success_message', 'Exam was successfully deleted.');
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
            'level' => 'string|min:1|required',
            'description' => 'string|min:1|max:600|required',
            'price' => 'integer|min:1|required',
        ];


        $data = $request->validate($rules);

        return $data;
    }

}
