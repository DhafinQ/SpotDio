<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Http\Requests\StoreAudioRequest;
use App\Http\Requests\UpdateAudioRequest;
use Intervention\Image\Facades\Image;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Audio $audios)
    {
        $audios = Audio::all();
        return view('index', compact('audios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('crud');

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAudioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAudioRequest $request)
    {
        $this->authorize('crud');

        $data = $request->validated();
        $imagepath = request('cover')->store('cover','public');

        $image = Image::make(public_path("storage/{$imagepath}"))->fit(800 , 800);
        $image->save();

        $audiopath = request('audio')->store('audio','public');

        
        $coverArray = ['cover' => $imagepath];
        $audioArray = ['audio' => $audiopath];
        
        Audio::create(array_merge(
            $data,
            $coverArray,
            $audioArray
        ));
        
        return redirect()->route('audio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function show(Audio $audio)
    {
        return view('show',compact('audio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function edit(Audio $audio)
    {
        $this->authorize('crud');
        return view('edit',compact('audio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAudioRequest  $request
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAudioRequest $request, Audio $audio)
    {
        $this->authorize('crud');

        $data = $request->validated();
        if(request('cover'))
        {
            $imagepath = request('cover')->store('cover','public');
    
            $image = Image::make(public_path("storage/{$imagepath}"))->fit(800 , 800);
            $image->save();
        }
        if(request('audio'))
        {
            $audiopath = request('audio')->store('audio','public');
        }

        
        $coverArray = ['cover' => $imagepath];
        $audioArray = ['audio' => $audiopath];
        
        $audio->update(array_merge(
            $data,
            $coverArray,
            $audioArray
        ));
        
        return redirect()->route('audio.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audio $audio)
    {
        $this->authorize('crud');

        $audio->delete();

        return redirect()->route('audio.index');
    }
}
