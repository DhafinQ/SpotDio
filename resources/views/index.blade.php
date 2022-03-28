@include('layouts.app')
@section('container')
<div class="row">
    <div class="col-2 menu">
      <ul>
        <li><a href="{{route('audio.index')}}" style="color:#fff; width:100%;">Home</a></li>
        <li><a href="{{route('audio.index')}}" style="color:#fff; width:100%;">My Playlist</a></li>
        <li><a href="{{route('audio.index')}}" style="color:#fff; width:100%;">Profiles</a></li>
        <li><a href="{{route('audio.index')}}" style="color:#fff; width:100%;">About</a></li>
      </ul>
    </div>
    <div class="col-9">
      @can('crud')
      <a href="{{route('audio.create')}}">Add Track</a>
      @endcan
      <h3>News</h3>
      <table class="table">
        @foreach ($audios as $audio)
        <tr>
            <td>{{$audio->judul}}</td>
            <td>{{$audio->artis}}</td>
            <td>{{$audio->durasi}} Minute</td>
            <td><a href="{{route('audio.show' , $audio->id)}}">More..</a></td>
            @can('crud')
            <td><a href="{{route('audio.edit' , $audio->id)}}">Edit</a></td>
            @endcan
        </tr>
        @endforeach
      </table>
    </div>


  </div>