<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Songs_Model;
use App\Models\Playlist_Model;
use App\Models\UserList_Model;
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

    public function store_songs(Request $request)
{
    // Check if the file is valid
    if ($request->file('Song')->isValid()) {
        // File is valid
    } else {
        // File upload failed
        return redirect()->back()->withErrors(['error' => 'File upload failed.'])->withInput();
    }

    // Debug statement
    echo "Form data received: ";
    print_r($request->all());

    $validatedData = $request->validate([
        'Song_Name' => 'required|max:25',
        'Artists_Name' => 'required',
        'Songs_Genre' => 'required',
        'Song' => 'required'
    ]);

    // Debug statement
    echo "Validated data: ";
    print_r($validatedData);

    if ($latestSong = Songs_Model::latest()->first() == null) {
        $Songs_Directory = 1;
    } else {
        $latestSong = Songs_Model::latest()->first();
        $Songs_Directory = $latestSong->id + 1;
    }

    $song = new Songs_Model();
    $song->Song_Name = $validatedData['Song_Name'];
    $song->Artists_Name = $validatedData['Artists_Name'];
    $song->Songs_Genre = $validatedData['Songs_Genre'];
    $song->Files_Name = $Songs_Directory . ".mp3";
    $song->Owners_ID = Auth::id();

    $song->save();

    // Store the uploaded file
    $request->file('Song')->storeAs('public/Songs', $Songs_Directory . ".mp3");

    return redirect(route('songs.index'));
}


    

    public function update_selected_song(Request $request, Songs_Model $song){
        
        $request->validate([
            'Song_Name' => 'required',
            'Artists_Name' => 'required',
            'Songs_Genre' => 'required',
        ]);

        $Songs_Directory = $request->input('Song');

        if($request->file('NewSong') == null){

        }else{
            $Song_File = file_get_contents($request->file('NewSong'));
            Storage::disk('public')->put('Songs/'.$Songs_Directory, $Song_File);
        }

        $song->update([
            'Song_Name' => $request->input('Song_Name'),
            'Artists_Name' => $request->input('Artists_Name'),
            'Songs_Genre' => $request->input('Songs_Genre'),
            'Files_Name' => $Songs_Directory
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
