<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users_Model;
use App\Models\Playlist_Model;
use App\Models\Songs_Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Admin_Controller extends Controller
{
    public function index(){

        $users = Users_Model::all();

        return view('UI.admin', ['users' => $users]);
    }
}
