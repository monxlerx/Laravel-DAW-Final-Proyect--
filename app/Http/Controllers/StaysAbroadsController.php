<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stays_Abroad;


class StaysAbroadsController extends Controller
{

    /**
     * Display a listing of the stays  abroads.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $staysAbroads = Stays_Abroad::sortable()->paginate(10);

        return view('stays__abroads.index', compact('staysAbroads'));
    }

    /**
     * Show the form for creating a new stays  abroad.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {


        return view('stays__abroads.create');
    }

    /**
     * Store a new stays  abroad in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            Stays_Abroad::create($data);

            return redirect()->route('stays__abroads.index')
                ->with('success_message', 'Stays  Abroad was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified stays  abroad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $staysAbroad = Stays_Abroad::findOrFail($id);

        return view('stays__abroads.show', compact('staysAbroad'));
    }

    /**
     * Show the form for editing the specified stays  abroad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $staysAbroad = Stays_Abroad::findOrFail($id);


        return view('stays__abroads.edit', compact('staysAbroad'));
    }

    /**
     * Update the specified stays  abroad in the storage.
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

            $staysAbroad = Stays_Abroad::findOrFail($id);
            $staysAbroad->update($data);

            return redirect()->route('stays__abroads.index')
                ->with('success_message', 'Stays  Abroad was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified stays  abroad from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $staysAbroad = Stays_Abroad::findOrFail($id);
            $staysAbroad->delete();

            return redirect()->route('stays__abroads.index')
                ->with('success_message', 'Stays  Abroad was successfully deleted.');
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
            'location' => 'string|min:1|required',
            'county' => 'string|required',
            'nation' => 'string|required',
            'country' => 'string|required',
            'school' => 'string|required',
            'accommodation' =>'string|required',
            'landmarks' => 'string|required',
            'price_week' => 'integer|min:1|required',
        ];


        $data = $request->validate($rules);

        return $data;
    }
}
