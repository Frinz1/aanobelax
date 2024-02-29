<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <meta charset="utf-8">
    <title>Nobela</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all">
</head>
<style>
.container {
    width: 100%;
    height: 50px;
    padding: 15px 0;
    border-bottom: 1px solid rgba(0, 0, 0, .1);
    position: absolute;
    z-index: 100;
    overflow: hidden;
    background-color: slategrey;
}

.book-container {
    margin: 20px;
    padding: 20px;
    background-color: #f7f7f7;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.book-container h1 {
    font-size: 24px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.book-container p {
    font-size: 16px;
    color: #666;
    margin-bottom: 10px;
}

.book-container .row {
    display: flex;
    justify-content: center;
}

.book-container .col-md-8 {
    max-width: 600px;
    width: 100%;
}

.book-title {
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.book-chapter {
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 2rem;
}

.book-content {
    margin-bottom: 2rem;
}

.paragraph {
    margin-bottom: 1rem;
}

.line {
    margin-bottom: 0.5rem;
}

.line:last-child {
    margin-bottom: 0;
}
</style>

<body>
    <header>
        <div class="container">
            <a class="logo" href="#">
                <img src="logo.png" alt="Logo" style="width: 60px; height: 60px;">
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
                <h1>{{ $product->title }}</h1>
                <div>

                    <p>{{ $product->body }}</p>

                </div>
            </div>
        </div>

    </div>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script src="js/main.js"></script>

</html>