@include('layouts.app')
@section('container')

<div class="container">
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
            <div class="card">
                <div class="card-header">
                    {{$audio->judul}}
                    <form action="{{route('playlist.store' , $audio->id)}}" method="post">
                        @csrf
                        <input type="submit" value="Add To Playlist">
                    </form>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>
                                <img src="/storage/{{$audio->cover}}" width="400px" height="400px">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Artis
                            </td>
                            <td>
                                : {{$audio->artis}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Album
                            </td>
                            <td>
                                : {{$audio->album}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Duration
                            </td>
                            <td>
                                : {{$audio->durasi}} Minute
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Music
                            </td>
                            <td>
                                <video src="/storage/{{$audio->audio}}" controls></video>                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lyrics
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{$audio->lirik}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    
    
    </div>

</div>

<p>{{$audio->judul}}</p><br>
<p>{{$audio->album}}</p><br>
<p>{{$audio->durasi}}</p><br>
<p>{{$audio->lirik}}</p><br>