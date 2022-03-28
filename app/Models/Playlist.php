<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        $this->belongsToMany(User::class,'playlists','music_id','user_id')->withTimestamps();
    }
}
