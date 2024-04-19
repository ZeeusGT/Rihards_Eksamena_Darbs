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

    public function view_selected_song(Songs_Model $song){
        return view('UI.view', ['Current_Song' => $song]);
    }

    public function edit_selected_song(Songs_Model $song){

        if(Auth::id() == $song->Owners_ID || Auth::user()->isAdmin){

            return view('UI.edit', ['Current_Song' => $song]);

        }else{

            return redirect()->route('songs.index')->with('error', "You do not have access to this page!");

        }

    }

    public function delete_song_by_id($id){

        $song = Songs_Model::find($id);

        if(Auth::id() == $song->Owners_ID || Auth::user()->isAdmin){

        if (file_exists('public/Songs_Folder/' . $song->id . '.mp3')) {
            unlink('public/Songs_Folder/' . $song->id . '.mp3');
        }
        $song->delete();
        
        return redirect(route('songs.index'));
        }else{

            return redirect()->route('songs.index')->with('error', "You do not have access to this page!");

        }
    }
    
    public function store_songs(Request $request) {
        $validatedData = $request->validate([
            'Song_Name' => 'required|max:25',
            'Artists_Name' => 'required',
            'Songs_Genre' => 'required',
            'Song' => 'required'
        ]);

        $latestSong = Songs_Model::latest()->first();

        if($latestSong == null){
            $songId = 1;
        }else{
            $songId = $latestSong->id + 1;
        }
    
        $song = new Songs_Model();
        $song->Song_Name = $validatedData['Song_Name'];
        $song->Artists_Name = $validatedData['Artists_Name'];
        $song->Songs_Genre = $validatedData['Songs_Genre'];
        $song->Owners_ID = Auth::id();
    
        $file = $request->file('Song');
        $fileName = $songId . '.mp3';
        $file->move('public/Songs_Folder', $fileName);
    
        $song->Files_Name = $fileName;
        $song->save();
    
        return redirect()->route('songs.index');
    }
    

    public function update_selected_song(Request $request, Songs_Model $song){

        if(Auth::id() == $song->Owners_ID || Auth::user()->isAdmin){
        
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

        }else{

            return redirect()->route('songs.index')->with('error', "You do not have access to this page!");

        }

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

    public function search_song_by_name(Request $request, $search_prompt){

        $results = Songs_Model::where('Song_Name', 'like', "%$search_prompt%")->get();
    
        return view('UI.list_of_songs', ['results' => $results, 'search_prompt' => $search_prompt]);
    }

    public function index_test(){

        return view('UI.index_test');

    }

}
