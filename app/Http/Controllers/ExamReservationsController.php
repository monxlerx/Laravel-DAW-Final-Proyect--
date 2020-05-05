<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Exam;
use App\Date_Exam;
use Illuminate\Support\Facades\Mail;
use Auth;
use App\Mail\ExamReservation;
use App\Exam_Reservation;

class ExamReservationsController extends Controller
{
    /**
     * Display a listing of the exam reservations.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $examReservations = Exam_reservation::with('exam','user')->sortable()->paginate(10);
        $id = Auth::user()->id;
        $userExamReservations = Exam_reservation::where('user_id', '=', $id)->get();
        $datesExams = DB::table('date_exams')
                            ->join('exams', 'date_exams.exam_id', '=', 'exams.id')
                            ->select('date_exams.id', 'exams.level', 'date_exams.date')
                            ->distinct('exams.level')
                            ->orderby('exams.level')
                            ->orderby('date_exams.date')
                            ->get();
        $exams = Exam::get();

        return view('exam_reservations.index', compact('examReservations', 'userExamReservations', 'datesExams', 'exams'));
    }

    /**
     * Show the form for creating a new exam reservation.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $exams = Exam::pluck('level', 'id')->all();
        $users = User::pluck('name','id')->all();
        $examReservations = Exam_Reservation::pluck('id', 'exam_id', 'user_id', 'booking_date')->all();


        return view('exam_reservations.create', compact('exams','users', 'examReservations'));
    }

    /**
     * Store a new exam reservation in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
            $email = Auth::user()->email;
            $name = Auth::user();
            $msg = $data;
            $exam = DB::table('exams')->select('level')->where('id', '=', $request['user_id'])->get();
            $price = DB::table('exams')->select('price')->where('id', '=', $request['user_id'])->get();

            Exam_reservation::create($data);
            //Mail::to($email)->queue(new ExamReservation($email, $name, $msg, $exam, $price));

            return redirect()->route('exam_reservations.index')
                ->with('success_message', 'Exam Reservation was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified exam reservation.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $examReservation = Exam_reservation::with('exam','user')->findOrFail($id);

        return view('exam_reservations.show', compact('examReservation'));
    }

    /**
     * Show the form for editing the specified exam reservation.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $examReservation = Exam_reservation::findOrFail($id);
        $exams = Exam::pluck('id','id')->all();
        $users = User::pluck('name','id')->all();

        return view('exam_reservations.edit', compact('examReservation','exams','users'));
    }

    /**
     * Update the specified exam reservation in the storage.
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

            $examReservation = Exam_reservation::findOrFail($id);
            $examReservation->update($data);

            return redirect()->route('exam_reservations.index')
                ->with('success_message', 'Exam Reservation was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified exam reservation from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $examReservation = Exam_reservation::findOrFail($id);
            $examReservation->delete();

            return redirect()->route('exam_reservations.index')
                ->with('success_message', 'Exam Reservation was successfully deleted.');
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
            'user_id' => 'required',
            'booking_date' => 'date|after:tomorrow|required',
            'status' => 'string|min:1|nullable',
        ];


        $data = $request->validate($rules);

        return $data;
    }


}

