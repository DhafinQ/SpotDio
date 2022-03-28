<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SpotDio</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body>
    {{-- Navbar --}}
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            <a href="{{route('audio.index')}}" >SpotDio</a> 
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        @if (!Auth::check())
          <div class="nav-links">
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Register</a>
          </div>
        @endif
        @if (Auth::check())
          <div class="nav-links">
            <form action="{{route('logout')}}" method="post">
              @csrf
              <a href="#">
                <input type="submit" value="Logout">
              </a>
            </form>
          </div>
        @endif
      </div>
    </div>

    
    <main>
      @yield('container')
    </main>
</body>
</html>