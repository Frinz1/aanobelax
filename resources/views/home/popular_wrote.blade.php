<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <meta charset="utf-8">
    <title>Nobela</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <link rel="icon" type="image/x-icon" href="logooo.png">
    <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all">
</head>
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

.book-container {
    margin: 20px;
    padding: 20px 20px 40px;

    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: auto;
}

.book-container h1 {
    font-size: 24px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.book-container .book-content {
    max-width: 600px;
    width: 100%;
    margin: 0 auto;
}

.book-container .paragraph {
    font-size: 25px;
    color: black;
    line-height: 1.5;
    margin-bottom: 20px;
}

.book-container .paragraph:last-child {
    margin-bottom: 0;
}

@media (max-width: 767px) {
    .book-container {
        margin: 10px;
        padding: 10px;
    }

    .book-container h1 {
        font-size: 20px;
    }

    .book-container .paragraph {
        font-size: 16px;
    }
}
</style>

<body>
    <header>
        <div class="container">
            <a class="logo" href="#">
                <img src="logooo.png" alt="Logo" style="width: 60px; height: 60px;">
            </a>
            <nav>
                <ul class="navbar">
                    <<li class="navbar"><a href="{{url('redirect')}}">Home</a></li>
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
    <br><br><br><br><br>
    <div class="book-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="book-title">{{ $product->title }}</h1>
                <div class="book-content">
                    <p class="paragraph">{{ $product->body }}</p>
                </div>
            </div>
        </div>


</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script src="js/main.js"></script>

</html>