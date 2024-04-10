<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Songs_Model;
use App\Models\Playlist_Model;
use App\Models\Users_Model;
use Illuminate\Support\Facades\Auth;

class Songs_Controller extends Controller
{
    public function index(){
        $userId = Auth::id();
        $randomPlaylists = Playlist_Model::where('owners_id', '!=', $userId)->get()->shuffle()->take(5);
        $usersPlaylists = Playlist_Model::where('owners_id', '=', $userId)->get();
        $totalUserPlaylists = Playlist_Model::where('owners_id', '=', $userId)->count(); 
        $songs = Songs_Model::all()->shuffle()->take(10);
        $playlist = Playlist_Model::all();

        return view('UI.index', ['songs' => $songs, 'usersPlaylist' => $usersPlaylists, 'randomPlaylist' => $randomPlaylists, 'totalUserPlaylist' => $totalUserPlaylists, 'playlists' => $playlist, 'PlayAnimation' => 0]);

    }

    public function create(){
        return view('UI.create');
    }

    public function view(){
        return view('UI.view');
    }

    public function edit_selected_song(Songs_Model $song){
        return view('UI.edit', ['Current_Song' => $song]);
    }

    public function delete_song_by_id($id){
        $song = Songs_Model::find($id);
        $song->delete();
        
        return redirect(route('songs.index'));
    }

    public function store_songs(Request $request) {
        $validatedData = $request->validate([
            'Song_Name' => 'required|max:25',
            'Artists_Name' => 'required',
            'Songs_Genre' => 'required',
            'Song' => 'required'
        ]);
    
        if ($request->hasFile('Song')) {
            $songFile = $request->file('Song');
            $Songs_Directory = $songFile->getClientOriginalName();
            $songFile->storeAs('Songs', $Songs_Directory);
        } else {
            return redirect()->back()->withErrors(['Song' => 'Please upload a song file.'])->withInput();
        }
    
        $song = new Songs_Model();
        $song->Song_Name = $validatedData['Song_Name'];
        $song->Artists_Name = $validatedData['Artists_Name'];
        $song->Songs_Genre = $validatedData['Songs_Genre'];
        $song->Files_Name = $Songs_Directory;
        $song->Owners_ID = Auth::id();
    
        $song->save();
    
        return redirect(route('songs.index'));
    }
    

    public function update_selected_song(Request $request, Songs_Model $song){
        
        $request->validate([
            'Song_Name' => 'required',
            'Artists_Name' => 'required',
            'Songs_Genre' => 'required',
        ]);

        $song->update([
            'Song_Name' => $request->input('Song_Name'),
            'Artists_Name' => $request->input('Artists_Name'),
            'Songs_Genre' => $request->input('Songs_Genre'),
        ]);
        
        return redirect(route('songs.index'));

    }

    public function store_liked_songs(Request $request){
        $likedSongs = $request->input('liked_songs');
        $user = Auth::user();
        $user->Liked_Songs = $likedSongs;
        $user->save();
    }

    public function logout_user(){
        Auth::logout();

        return redirect(route('songs.login'));
    }

}
