<?php

namespace App\Http\Controllers;
use App\ExternalEmail;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ExternalEmailsController extends Controller
{
    /**
     * Display a listing of the external  emails.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $externalEmails = ExternalEmail::sortable()->paginate(10);
        $externalEmail = ExternalEmail::pluck('email','name', 'message')->all();

        return view('external__emails.index', compact('externalEmails', 'externalEmail'));
    }

    /**
     * Show the form for creating a new external  email.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $externalEmail = ExternalEmail::pluck('email','name', 'message')->all();

        return view('index', compact('externalEmail'));
    }

    /**
     * Store a new external  email in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
            $msg = $data;
            
            ExternalEmail::create($data);
            Mail::to('holyroodenglish@gmail.com')->queue(new MessageReceived($msg));

            return redirect()->route('index')
                ->with('success_message', 'Email was successfully sent.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified external  email.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $externalEmail = ExternalEmail::findOrFail($id);

        return view('external__emails.show', compact('externalEmail'));
    }

    /**
     * Show the form for editing the specified external  email.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $externalEmail = ExternalEmail::findOrFail($id);


        return view('external__emails.edit', compact('externalEmail'));
    }

    /**
     * Update the specified external  email in the storage.
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

            $externalEmail = ExternalEmail::findOrFail($id);
            $externalEmail->update($data);

            return redirect()->route('external__emails.index')
                ->with('success_message', 'External  Email was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified external  email from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $externalEmail = ExternalEmail::findOrFail($id);
            $externalEmail->delete();

            return redirect()->route('external__emails.index')
                ->with('success_message', 'External  Email was successfully deleted.');
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
            'name' => 'string|min:1|max:255|required',
            'email' => 'email|required',
            'message' => 'string|required',
        ];


        $data = $request->validate($rules);

        return $data;
    }
}
