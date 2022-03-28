<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Playlist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userid = Auth::user()->id;
        $playlist = Playlist::all()->where('user_id',$userid);

        return view('playlist' , compact('playlist'));
    }

    public function store(Audio $audio)
    {
        $userid = Auth::user()->id;
        $audioid = $audio->id;

        Playlist::create([
            'user_id' => $userid,
            'music_id' => $audioid
        ]);

        return back()->with('success','Added To Playlist');
    }
}
