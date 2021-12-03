<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class SongAlbumController extends Controller
{

    public function store(Request $request, $album_id)
    {
        $album = Album::find($album_id);
        $album->songs()->attach($request->input('song_id'));
        return redirect()->route('albums.index');
    }

    // /albums/{album_id}/songs/{song_id}
    public function destroy($album_id, $song_id)
    {
        $album = Album::find($album_id);
        $album->songs()->detach($song_id);
        return redirect()->route('albums.index');

    }
}
