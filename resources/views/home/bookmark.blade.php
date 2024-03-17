<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <meta charset="utf-8">
    <title>Nobela</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

    /* Your existing styles */
    .container {
        width: 100%;
        height: 50px;
        padding: 15px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .1);
        position: absolute;
        z-index: 100;
        overflow: hidden;
    }

    .center {
        margin: auto;
        width: 90%;
        /* Adjusted width to make the card view bigger */
        text-align: center;
        padding: 30px;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        position: relative;
        margin: 20px;
        /* Increased margin for better spacing */
        width: 300px;
        height: 250px;
        /* Adjusted width to make the card bigger */
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
    }

    .card-image {
        width: 100%;
        height: auto;
    }

    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card:hover .card-overlay {
        opacity: 1;
    }

    .card-title {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px;
        /* Increased padding for better readability */
        font-weight: bold;
        text-align: center;
        font-size: 15px;
        /* Adjusted font size for better visibility */
    }

    .card-title:hover {
        background-color: rgba(255, 255, 255, 1);
    }

    .read-button,
    .delete-button {
        color: white;
        padding: 10px 20px;
        /* Increased padding for better visibility */
        margin: 10px;
        /* Increased margin for better spacing */
        text-decoration: none;
        border: none;
        /* Removed border for better styling */
        cursor: pointer;
        border-radius: 5px;
        outline: none;
    }

    .delete-button {
        background-color: #ff0000;
    }

    .read-button {
        background-color: #008000;
    }

    .no-bookmarks {
        font-size: 24px;
        /* Increased font size */
        color: red;
        font-weight: bold;
        margin-top: 50px;
        text-align: center;
        padding: 20px;
        /* Increased padding for better visibility */
    }

    /* Transparent Navbar */
    .navbar {
        background-color: transparent !important;
        padding: 0;
    }

    .navbar-nav .nav-link {
        color: black !important;
    }

    .navbar-nav .nav-link:hover {
        color: #f8f9fa !important;
    }

    .navbar-brand img {
        width: 100px;
        height: 90px;
        margin-right: 120px;
    }

    .navbar-nav .nav-item {
        margin: 0 15px;
    }

    .navbar-collapse {
        justify-content: flex-end;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="logooo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('redirect')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('bookmark')}}">Bookmark</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                        </li>
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a class="nav-link"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br><br><br><br><br><br>
    <div class="center">
        <div class="card-container">
            @if (count($bookmarks) === 0)
            <div class="no-bookmarks">No Bookmarks Available</div>
            @else
            @foreach($bookmarks as $bookmark)
            <div class="card">
                <img class="card-image" src="/products/{{ $bookmark->image }}" alt="{{ $bookmark->product_title }}">
                <div class="card-overlay">
                    <form action="{{url('popular_wrote',$bookmark->product->id)}}" method="GET">
                        <button type="submit" class="read-button">READ</button>
                    </form>
                    <a class="delete-button" href="{{url('/remove_bookmark',$bookmark->id)}}">DELETE</a>
                </div>
                <div class="card-title">{{ $bookmark->product_title }}</div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>