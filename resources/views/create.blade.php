@include('layouts.app')
@section('container')
<div class="container">
    <div class="row content-center">
        <div class="card">
            <div class="card-header">
                Add Music
            </div>
            <div class="card-body">
                <form action="{{route('audio.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="judul" placeholder="Judul" class="mb-2"><br>
                    <input type="text" name="artis" placeholder="Artis"  class="mb-2"><br>
                    <input type="number" name="durasi" placeholder="Durasi"  class="mb-2"><br>
                    <input type="text" name="album" placeholder="Album"  class="mb-2"><br>
                    <label for="cover" class="mb-2">Cover </label><br>
                    <input type="file" id="cover" name="cover"  class="mb-2"><br>
                    <label for="audio" class="mb-2">Music File (MP3) </label><br>
                    <input type="file" id="audio" name="audio"  class="mb-2"><br>
                    <textarea name="lirik" cols="30" rows="20" style="resize: none"  class="mb-2"></textarea>
                    <input type="submit" value="Add New">
                </form>
            </div>
        </div>
        
    </div>
</div>
@if ($errors->all())
    @foreach ($errors as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach
@endif

