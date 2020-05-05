<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Stays_Abroad;
use App\Mail\StaysAbroad;
use App\Booking_Stays_Abroad;
use Illuminate\Http\Request;

class BookingStaysAbroadsController extends Controller
{
       /**
     * Display a listing of the booking  stays  abroads.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $bookingStaysAbroads = Booking_Stays_Abroad::sortable()->paginate(10);
        $id = Auth::user()->id;
        $userBookingStaysAbroads = Booking_Stays_Abroad::where('user_id', '=', $id)->get();
        $staysAbroads = Stays_Abroad::get();

        return view('booking__stays__abroads.index', compact('bookingStaysAbroads', 'userBookingStaysAbroads', 'staysAbroads'));
    }

    /**
     * Show the form for creating a new booking  stays  abroad.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $staysAbroads= Stays_Abroad::pluck('location','id')->all();
        $users = User::pluck('name','id')->all();

        return view('booking__stays__abroads.create', compact('users', 'staysAbroads'));
    }

    /**
     * Store a new booking  stays  abroad in the storage.
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
            $location = DB::table('stays_abroads')->select('location')->where('id', '=', $request['id_stays_abroad'])->get();

            Booking_Stays_Abroad::create($data);
            Mail::to($email)->queue(new StaysAbroad($msg, $email, $name, $location));

            return redirect()->route('booking__stays__abroads.index')
                ->with('success_message', 'Booking  Stays  Abroad was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified booking  stays  abroad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $bookingStaysAbroad = Booking_Stays_Abroad::with('user')->findOrFail($id);

        return view('booking__stays__abroads.show', compact('bookingStaysAbroad'));
    }

    /**
     * Show the form for editing the specified booking  stays  abroad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $bookingStaysAbroad = Booking_Stays_Abroad::findOrFail($id);
        $users = User::pluck('name','id')->all();
        $staysAbroads= Stays_Abroad::pluck('location','id')->all();

        return view('booking__stays__abroads.edit', compact('bookingStaysAbroad','users','staysAbroads'));
    }

    /**
     * Update the specified booking  stays  abroad in the storage.
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

            $bookingStaysAbroad = Booking_Stays_Abroad::findOrFail($id);
            $bookingStaysAbroad->update($data);

            return redirect()->route('booking__stays__abroads.index')
                ->with('success_message', 'Booking  Stays  Abroad was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified booking  stays  abroad from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $bookingStaysAbroad = Booking_Stays_Abroad::findOrFail($id);
            $bookingStaysAbroad->delete();

            return redirect()->route('booking__stays__abroads.index')
                ->with('success_message', 'Booking  Stays  Abroad was successfully deleted.');
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
            'id_stays_abroad' => 'required',
            'user_id' => 'required',
            'status' => 'string',
            'departure_date' => 'required|date|after:tomorrow',
            'return_date' => 'required|date|after:departure_date',
            'number_weeks' => 'integer|required'
        ];

        $data = $request->validate($rules);

        return $data;
    }
}

