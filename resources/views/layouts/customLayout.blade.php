<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Css -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
      <header>
        <div class="logo">
          <img src="https://images2.minutemediacdn.com/image/upload/c_crop,h_1193,w_2121,x_0,y_64/f_auto,q_auto,w_1100/v1565279671/shape/mentalfloss/578211-gettyimages-542930526.jpg" alt="">
        </div>

        <!-- Authentication Links -->
        @guest
        <div class="nav-bar">
          <a  href="{{ route('login') }}">Login</a>
          <a  href="{{ route('register') }}">Register</a>
        </div>
        @else
          <div class="nav-bar">
            <a  href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
              Logout
            </a>
            <a href="{{route('ctusr.index')}}">
              Home
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>

        @endguest
      </header>
      <div class="link">
        @yield('link')
      </div>
      <div class="container-box">
        @yield('content')
      </div>
      <footer>
        <p>Footer</p>
      </footer>
    </body>
</html>
