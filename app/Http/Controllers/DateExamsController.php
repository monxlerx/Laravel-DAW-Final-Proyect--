<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Date_Exam;

class DateExamsController extends Controller
{
     /**
     * Display a listing of the date  exams.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $dateExams = Date_Exam::sortable()->paginate(10);

        return view('date__exams.index', compact('dateExams'));
    }

    /**
     * Show the form for creating a new date  exam.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $exams = Exam::pluck('level','id')->all();

        return view('date__exams.create', compact('exams'));
    }

    /**
     * Store a new date  exam in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            Date_Exam::create($data);

            return redirect()->route('date__exams.index')
                ->with('success_message', 'Date  Exam was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified date  exam.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $dateExam = Date_Exam::with('exam')->findOrFail($id);

        return view('date__exams.show', compact('dateExam'));
    }

    /**
     * Show the form for editing the specified date  exam.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $dateExam = Date_Exam::findOrFail($id);
        $exams = Exam::pluck('level','id')->all();

        return view('date__exams.edit', compact('dateExam','exams'));
    }

    /**
     * Update the specified date  exam in the storage.
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

            $dateExam = Date_Exam::findOrFail($id);
            $dateExam->update($data);

            return redirect()->route('date__exams.index')
                ->with('success_message', 'Date  Exam was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified date  exam from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $dateExam = Date_Exam::findOrFail($id);
            $dateExam->delete();

            return redirect()->route('date__exams.index')
                ->with('success_message', 'Date  Exam was successfully deleted.');
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
            'exam_id' => 'integer|required',
            'date' => 'date|after:tomorrow|required',
        ];


        $data = $request->validate($rules);

        return $data;
    }
}
