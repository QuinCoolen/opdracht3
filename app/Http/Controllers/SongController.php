<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Album;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("songs.index", ['songs' => Song::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $songsFromAPI = [];
        if($request->query->has('title')) // zoekt op de song met een title die wordt meegegeven
        {
            $api_key = 'f88548685ba3f9a3db89531eb1f5517d';
            $title = $request->query('title');
            $response = Http::get( // Pakt het liedje vanuit de API in json format
                'http://ws.audioscrobbler.com/2.0/?method=track.search&track=' .
                $title . '&api_key=' . $api_key . '&format=json'
            )->json();

            $songsFromAPI = $response["results"]["trackmatches"]["track"]; // Zet het resultaat in de songsFromAPI Array
        }
        return view("songs.create", ['songsFromAPI' => $songsFromAPI]);
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
        Log::channel('autolog')->debug("{$user}: song | store");

    	$request->validate([
            'title' => 'required|max:191',
            'singer' => 'required|max:100',
        ]);

        Song::create($request->except('_token'));
        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($index)
    {
        return view("songs.show", ['song' => Song::find($index)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("songs.edit", ['song' => Song::find($id), 'albums' => Album::all()]);
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
        Log::channel('autolog')->debug("{$user}: song | update");

        $request->validate([
            'title' => 'required|max:191',
            'singer' => 'required|max:100',
        ]);
        
        Song::find($id)->update($request->except(['id', '_token']));
        return redirect()->route('songs.index');
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
        Log::channel('autolog')->debug("{$user}: song | destroy");

        Song::find($id)->delete();
        return redirect()->route('songs.index');
    }
}
