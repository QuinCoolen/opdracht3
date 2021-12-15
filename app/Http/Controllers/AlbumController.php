<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Band;
use App\Models\Song;
use Illuminate\Support\Facades\Log;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("albums.index", ['albums' => Album::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("albums.create", ['bands' => Band::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $user = auth()->user()->name;
        Log::channel('autolog')->debug("{$user}: album | create");

        $request->validate([
            'name' => 'required|max:191',
            'year' => 'integer|min:1900|max:2022',
            'times_sold' => 'numeric|min:0',
        ]);

        Album::create($request->except('_token'));
        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($index)
    {
        return view("albums.show", ['album' => Album::find($index)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = [];
        $album = Album::find($id);
        foreach($album->songs as $song){
            array_push($emp,$song->id);
        }

        return view("albums.edit", ['album' => $album, 'bands' => Band::all(), 'songs' => Song::all()->except($emp)]);
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
        $user = auth()->user()->name;
        Log::channel('autolog')->debug("{$user}: album | update");

        $request->validate([
            'name' => 'required|max:191',
            'year' => 'max:191',
        ]);
        Album::find($id)->update($request->except(['id', '_token']));
        return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $user = auth()->user()->name;
        Log::channel('autolog')->debug("{$user}: album | destroy");

        Album::find($id)->delete();
        return redirect()->route('albums.index');
    }
}
