<?php
use App\Http\Controllers\Songs_Controller;
use App\Http\Controllers\Playlists_Controller;
use App\Http\Controllers\Authentication_Controller;
use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\Mail_Controller;
use App\Http\Controllers\AboutUs_Controller;


// Your other routes...

Route::get('/', function () {
    return view('UI.userLogin');
});

Route::get('/songs', [Songs_Controller::class, 'index'])->name('songs.index')->middleware('auth');
Route::get('/songs/create', [Songs_Controller::class, 'create'])->name('songs.create')->middleware('artist');
Route::get('/songs/{song}/view', [Songs_Controller::class, 'view_selected_song'])->name('songs.view')->middleware('auth');
Route::get('songs/{song}/edit', [Songs_Controller::class, 'edit_selected_song'])->name('songs.edit')->middleware('auth');
Route::put('songs/{song}/update', [Songs_Controller::class, 'update_selected_song'])->name('songs.update')->middleware('auth');
Route::post('/songs', [Songs_Controller::class, 'store_songs'])->name('songs.store')->middleware('auth');
Route::post('/songs/updatelikes', [Songs_Controller::class, 'store_liked_songs'])->name('songs.updatelikes')->middleware('auth');
Route::get('/songs/leave', [Songs_Controller::class, 'logout_user'])->name('songs.user_logout')->middleware('auth');
Route::delete('/songs/delete/{id}', [Songs_Controller::class, 'delete_song_by_id'])->name('songs.delete')->middleware('auth');

Route::get('/songs/playlist_creation', [Playlists_Controller::class, 'index'])->name('songs.playlist')->middleware('auth');
Route::post('/songs/playlist_creation', [Playlists_Controller::class, 'store_playlist'])->name('songs.playlist_store')->middleware('auth');
Route::get('songs/playlist/{playlist}/playlist_listening', [Playlists_Controller::class, 'listen_to_selected_playlist'])->name('songs.playlist_listen')->middleware('auth');
Route::get('songs/playlist/{playlist}/playlist_edit', [Playlists_Controller::class, 'edit_selected_playlist'])->name('songs.playlist_edit')->middleware('auth');
Route::put('songs/playlist/{playlist}/playlist_update', [Playlists_Controller::class, 'update_selected_playlist'])->name('songs.playlist_update')->middleware('auth');
Route::delete('songs/playlist/playlist_delete/{id}', [Playlists_Controller::class, 'delete_playlist_by_id'])->name('songs.playlist_delete')->middleware('auth');
Route::get('songs/playlist/liked_songs', [Playlists_Controller::class, 'listen_to_liked_songs'])->name('songs.playlist_liked_songs')->middleware('auth');

Route::get('/songs/login', [Authentication_Controller::class, 'index'])->name('songs.login');
Route::get('/songs/password_reset', [Authentication_Controller::class, 'passwordReset'])->name('songs.reset');
Route::get('/songs/register', [Authentication_Controller::class, 'register_redirect'])->name('songs.register');
Route::post('/songs/createUser', [Authentication_Controller::class, 'register'])->name('songs.createUser');
Route::post('/songs/loginUser', [Authentication_Controller::class, 'login'])->name('songs.loginUser');
Route::get('songs/{user}/edit_user', [Authentication_Controller::class, 'edit_selected_user'])->name('songs.user_edit')->middleware('auth');
Route::put('songs/{user}/edit_user', [Authentication_Controller::class, 'update_selected_user'])->name('songs.user_update')->middleware('auth');

Route::get('/songs/admin', [Admin_Controller::class, 'index'])->name('songs.admin')->middleware('auth', 'admin.check');
Route::get('/songs/aboutus', [AboutUs_Controller::class, 'home_view'])->name('songs.aboutus')->middleware('auth');

Route::post('/send-mail', [Mail_Controller::class, 'sendMail'])->name('mail');
Route::post('/validate-mail', [Mail_Controller::class, 'validateCode'])->name('mail.validate');
Route::get('/update-mail', [Mail_Controller::class, 'redirectUser'])->name('mail.redirect_user');
Route::put('/update-mail', [Mail_Controller::class, 'updatePassword'])->name('mail.update');