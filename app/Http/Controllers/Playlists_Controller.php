<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songs_Model;
use App\Models\Playlist_Model;
use App\Models\UserList_Model;
use Illuminate\Support\Facades\Auth;

class Playlists_Controller extends Controller
{

        public function index(){
            $songs = Songs_Model::all();
            $userId = Auth::id();

            $userData = UserList_Model::find($userId);
            
            $songIds = $userData->Liked_Songs ?? [];
            return view('UI.playlist_creation', ['songs' => $songs, 'array' => $songIds]);
        }

        public function store_playlist(Request $request){

            $user = Auth::user();

            $validatedData = $request->validate([
                'Playlists_Name' => 'required',
                'ListOfSongs' => 'required'
            ]);
        
            $playlist = new Playlist_Model();
            $playlist->name = $validatedData['Playlists_Name'];
            $playlist->playlists_owner = $user->username;
            $playlist->song_id_list = $request->input('ListOfSongs');
            $playlist->Owners_ID = Auth::id();
        
            $playlist->save();
        
            return redirect(route('songs.index'));
        }

        public function listen_to_selected_playlist(Playlist_Model $playlist){

            $play_list = Playlist_Model::findOrFail($playlist->id);

            $string = $play_list->song_id_list;
            
            $string = str_replace(['[', ']', ' '], '', $string);
            $array = explode(',', $string);
            
            $array = array_map('intval', $array);
        
            $songIds = $array;
            $songs = Songs_Model::all();
            
            return view('UI.playlist_listening', ['songs' => $songs, 'array' => $songIds, 'playlist' => $play_list]);
        }

        public function edit_selected_playlist(Playlist_Model $playlist){
            $songs = Songs_Model::all();

            $play_list = Playlist_Model::findOrFail($playlist->id);

            $string = $play_list->song_id_list;
            
            $string = str_replace(['[', ']', ' '], '', $string);
            $array = explode(',', $string);
        
            $array = array_map('intval', $array);

            $userId = Auth::id();
            $userData = UserList_Model::find($userId);
            
            $songIds = $userData->Liked_Songs ?? [];
        
            //$songIds = $array;

            return view('UI.playlist_edit', ['songs' => $songs, 'playlist' => $playlist, 'array' => $songIds, 'current_playlists_data' => $array]);
        }

        public function update_selected_playlist(Playlist_Model $playlist, Request $request){

            $request->validate([
                'Playlists_Name' => 'required',
                'Playlists_Owner' => 'required',
                'ListOfSongs' => 'required',
            ]);

            $playlist->update([
                'name' => $request->input('Playlists_Name'),
                'playlists_owner' => $request->input('Playlists_Owner'),
                'song_id_list' => $request->input('ListOfSongs')
            ]);

            return redirect(route('songs.index'));

        }
    
        public function store_songs(Request $request){
            
            $request->validate([
                'Song_Name' => 'required',
                'Artists_Name' => 'required',
                'Songs_Genre' => 'required',
                'Song' => 'required'
            ]);
        
            $Songs_Directory = $request->file('Song')->getClientOriginalName();
            $Song_File = file_get_contents($request->file('Song')); 
        
            $newSong = Songs_Model::create([
                'Song_Name' => $request->input('Song_Name'),
                'Artists_Name' => $request->input('Artists_Name'),
                'Songs_Genre' => $request->input('Songs_Genre'),
                'Files_Name' => $Songs_Directory
            ]);
    
            Storage::disk('public')->put('Songs/'.$Songs_Directory, $Song_File);
            
            return redirect(route('songs.index'));
        }

        public function listen_to_liked_songs(){

            $songs = Songs_Model::all();
            $userId = Auth::id();

            $userData = UserList_Model::find($userId);
            
            $songIds = $userData->Liked_Songs ?? [];
    
            return view('UI.playlist_listening', ['songs' => $songs, 'array' => $songIds]);
    
        }
        

}
