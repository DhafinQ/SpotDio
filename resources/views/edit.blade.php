@include('layouts.app')
@section('container')
<div class="container">
    @if ($errors->all())
    @foreach ($errors as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach
    @endif
    <div class="row content-center">
        <div class="card">
            <div class="card-header">
                Add Music
            </div>
            <div class="card-body">
                <form action="{{route('audio.update' , $audio->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="judul" placeholder="Judul" class="mb-2" value="{{$audio->judul}}"><br>
                    <input type="text" name="artis" placeholder="Artis"  class="mb-2" value="{{$audio->artis}}"><br>
                    <input type="number" name="durasi" placeholder="Durasi"  class="mb-2" value="{{$audio->durasi}}"><br>
                    <input type="text" name="album" placeholder="Album"  class="mb-2" value="{{$audio->album}}"><br>
                    <label for="cover" class="mb-2">Cover </label><br>
                    <input type="file" id="cover" name="cover"  class="mb-2"><br>
                    <label for="audio" class="mb-2">Music File (MP3) </label><br>
                    <input type="file" id="audio" name="audio"  class="mb-2"><br>
                    <textarea name="lirik" cols="30" rows="20" style="resize: none"  class="mb-2">{{$audio->lirik}}</textarea>
                    <input type="submit" value="Add New">
                </form>
            </div>
        </div>
        
    </div>
</div>


