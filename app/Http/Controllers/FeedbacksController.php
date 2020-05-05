<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\User;
use FormBuilder;
use DB;
use Auth;

class FeedbacksController extends Controller
{
      /**
     * Display a listing of the feedbacks.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $feedbacksObjects = Feedback::sortable()->paginate(10);
        $id = Auth::user()->id;
        $userFeedbacks = Feedback::where('user_id', '=', $id)->orderBy('created_at', 'desc')->get();

        return view('feedbacks.index', compact('feedbacksObjects', 'userFeedbacks', 'id'));
    }

    

    /**
     * Show the form for creating a new feedbacks.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {

        $users = User::pluck('id', 'name')->all();
        $feedbacks = Feedback::pluck('user_id')->all();

        return view('feedbacks.create', compact('users', 'feedbacks'));
    }

    /**
     * Store a new feedbacks in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            Feedback::create($data);

            return redirect()->route('feedbacks.index')
                ->with('success_message', 'Feedbacks was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified feedbacks.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $feedbacks = Feedback::findOrFail($id);

        return view('feedbacks.show', compact('feedbacks'));
    }

    /**
     * Show the form for editing the specified feedbacks.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $feedbacks = Feedback::findOrFail($id);
        $users = User::pluck('id', 'name')->all();

        return view('feedbacks.edit', compact('feedbacks','users'));
    }

    /**
     * Update the specified feedbacks in the storage.
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

            $feedbacks = Feedback::findOrFail($id);
            $feedbacks->update($data);

            return redirect()->route('feedbacks.index')
                ->with('success_message', 'Feedbacks was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified feedbacks from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $feedbacks = Feedback::findOrFail($id);
            $feedbacks->delete();

            return redirect()->route('feedbacks.index')
                ->with('success_message', 'Feedbacks was successfully deleted.');
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
                'user_id' => 'required',
                'description' => 'required',
                'month' => 'required',
                'year' => 'required'
        ];


        $data = $request->validate($rules);

        return $data;
    }
}
