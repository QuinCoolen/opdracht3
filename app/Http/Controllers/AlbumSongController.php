<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class AlbumSongController extends Controller
{
    public function store(Request $request, $song_id)
    {
        $song = Song::find($song_id);
        $song->album()->attach($request->input('album_id'));
        return redirect()->route('songs.index');
    }

    // /albums/{album_id}/songs/{song_id}
    public function destroy($song_id, $album_id)
    {
        $song = Song::find($song_id);
        $song->album()->detach($album_id);
        return redirect()->route('songs.index');

    }
}
