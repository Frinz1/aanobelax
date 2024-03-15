<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <meta charset="utf-8">
    <title>Novela</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <link rel="icon" type="image/x-icon" href="logooo.png">
    <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all">
    <style>
    body {
        background-image: url('background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container {
        width: 100%;
        height: 50px;
        padding: 15px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .1);
        position: absolute;
        z-index: 100;
        overflow: hidden;

    }

    .logo {
        background: url() no-repeat;
        margin-left: 30px;
        height: 54px;
        width: 110px;
        float: left;
        background-position: 0 0px;
    }

    .navbar {

        float: right;
        margin: 5px 20px 0 0;
    }

    .navbar li {
        float: left;
        height: 42px;
        line-height: 42px;
        margin: 0 15px;
    }

    .navbar li a {
        text-decoration: none;
        color: #fff;
        font-size: 15px;
        padding: 10px 0;
        font-weight: bold;
        position: relative;
    }

    .navbar li a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        border-bottom: 2px solid #fff;
        transition: 0.4s;
    }

    .navbar li a:hover::after {
        width: 100%;
    }

    .nav-fixed {
        position: fixed;
        padding: 5px 0;
        background: #fff;
    }

    .nav-fixed .logo {
        background-position: 0 -82px;
    }

    .nav-fixed li a {
        color: #000;
    }

    .nav-fixed li a::after {
        border-bottom: 2px solid #000;
    }

    .new {
        background: url(../img/icon.png) no-repeat;
        width: 30px;
        height: 22px;
        background-position: 0 -560px;
        display: inline-block;
        margin-left: 5px;
    }

    .orz {
        background: url(../img/orz.png) no-repeat;
        width: 30px;
        height: 22px;
        display: inline-block;
        margin-left: 5px;
    }

    .manga-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .manga-list li {
        width: calc(33.333% - 20px);
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin: 10px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .manga-list li:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .manga-list li img {
        width: 100%;
        height: auto;
    }

    .manga-info {
        padding: 15px;
    }

    .manga-info a {
        display: block;
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 10px;
        text-decoration: none;
        color: #333;
    }

    .manga-info h4 {
        font-size: 1.5rem;
        font-weight: bold;
        color: #444;
        margin-bottom: 10px;
    }

    .description {
        font-size: 18px;
        font-weight: bold;
        color: #444;
    }

    .rating {
        font-size: 16px;
        color: #666;
        font-weight: bold;
    }

    .genre {
        font-size: 14px;
        color: #888;
        font-weight: bold;
    }


    .manga-info button:hover {
        background-color: #0069d9;
    }

    .read-button {
        display: block;
        width: 100%;
        padding: 5px;
        background-color: #4CAF50;
        color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
    }

    .bookmark-button {
        display: block;
        width: 100%;
        padding: 5px;
        background-color: #4CAF50;
        color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
    }

    .bookmark-button:hover {
        background-color: #3e8e41;
    }

    .read-button:hover {
        background-color: #43a047;
    }

    .read-button,
    .bookmark-button {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        font-size: 14px;
        padding: 5px 10px;
        border-radius: 12px;
        text-transform: uppercase;
    }

    @media (max-width: 767px) {
        .manga-list li {
            width: 100%;
        }

        .manga-info {
            padding: 10px;
        }

        .manga-info a {
            font-size: 1.2rem;
        }

        .manga-info h4 {
            font-size: 1.2rem;
        }

        .read-button,
        .bookmark-button {
            font-size: 14px;
            padding: 5px 10px;
        }
    }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <a class="logo" href="#">
                <img src="logooo.png" alt="Logo" style="width: 60px; height: 60px;">
            </a>
            <nav>
                <ul class="navbar">
                    <li class="navbar"><a href="{{url('redirect')}}">Home</a></li>
                    <li class="navbar"><a href="{{url('bookmark')}}">Bookmark</a></li>
                    <li class="navbar"><a href="{{url('aboutus')}}">About Us</a></li>
                    <li class="navbar"><a href="{{url('contact')}}">Contact Us</a></li>

                    @if (Route::has('login'))
                    @auth
                    <li class="navbar">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                    @else
                    <li class="navbar"><a class="btn btn-primary" href="{{route('login')}}">Login</a></li>
                    <li class="navbar"><a class="btn btn-primary" href="{{route('register')}}">Register</a></li>
                    @endauth
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <br><br><br><br><br><br><br><br>
    <ul class="manga-list">
        <li>
            <a href="{{url('product_details',$product->id)}}"><img style="height:300px" width="200px"
                    src="products/{{$product->image}}"></a>
            <div class="manga-info">
                <a href="#">{{$product->title}}</a>
                <h4 class="description">{{$product->description}}</h4>
                <h4 class="rating">Rating: {{$product->rating}}</h4>
                <h4 class="genre">Genre: {{$product->genre}}</h4>
                <form action="{{url('add_bookmark',$product->id)}}" method="Post">
                    @csrf
                    <button type="submit" name="" class="read-button">Bookmark</button>
                </form>
                <br>
                <form action="{{url('popular_wrote',$product->id)}}" method="GET">
                    <button type="submit" class="read-button">READ</button>
                </form>

            </div>
        </li>
    </ul>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script src="js/main.js"></script>

</html>