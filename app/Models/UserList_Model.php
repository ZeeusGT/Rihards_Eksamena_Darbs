<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class UserList_Model extends Authenticatable
{
    use HasFactory;
    
    protected $table = 'user_list';

    protected $fillable = [
        'username',
        'email',
        'password',
        'isArtist',
        'isAdmin'
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
    }

    protected $casts = [
        'Liked_Songs' => 'array',
    ];
}
