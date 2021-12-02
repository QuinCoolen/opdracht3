<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("bands.index", ['bands' => Band::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("bands.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'genre' => 'required|max:191',
            'founded' => 'required|max:4',
            'active_till' => 'max:191',
        ]);

        if($request['active_till'] == ''){
            Band::create($request->except('_token', 'active_till'));
        } else {
            Band::create($request->except('_token'));
        }

        return redirect()->route('bands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($index)
    {
        return view("bands.show", ['band' => Band::find($index), 'albums' => Band::find($index)->albums]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("bands.edit", ['band' => Band::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:191',
            'genre' => 'required|max:191',
            'founded' => 'required|max:4',
            'active_till' => 'max:191',
        ]);
        
        Band::find($id)->update($request->except(['id', '_token']));
        return redirect()->route('bands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Band::find($id)->delete();
        return redirect()->route('bands.index');
    }
}
