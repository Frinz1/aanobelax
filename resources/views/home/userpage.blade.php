<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
.manga-content {
    padding: 0;
}

.list-wrap {
    display: flex;
    justify-content: center;
    overflow-x: auto;
    /* Add overflow property to enable horizontal scrollbar */
    max-width: 100%;
    /* Set a maximum width */
}


code .jspContainer {
    max-width: 1600px;
    /* Adjust the max-width as needed */
    width: 100%;
    height: 400px;
    /* Set the height as needed */
    overflow-x: auto;
    /* Add overflow property to enable horizontal scrollbar */
}

.manga-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.manga-list li {
    display: inline-block;
    margin-right: 20px;
    position: relative;
}

.manga-link {
    display: block;
    text-decoration: none;
    color: #333;
    transition: transform 0.3s ease;
}

.manga-link:hover {
    transform: scale(1.05);
}

.manga-image {
    width: 200px;
    height: 300px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: skyblue;
}

.manga-title {
    margin-top: 5px;
    font-size: 16px;
    text-align: center;
}

.manga-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    /* Adjust the opacity as needed */
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.manga-item:hover .manga-overlay {
    opacity: 1;
}
</style>

<body>
    <header>
        <div class="container">
            <a class="logo" href="/">
                <img src="logooo.png" alt="Logo" style="width: 60px; height: 60px;">
            </a>
            <nav>
                <ul class="navbar">
                    <li class="navbar"><a href="{{url('redirect')}}"></a></li>
                    @if (Route::has('login'))
                    @auth
                    <li class="navbar"><a href="{{url('bookmark')}}">Bookmark</a></li>
                    @else
                    <li class="navbar"><a href="{{url('/')}}">Bookmark</a></li>
                    @endauth
                    @endif

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
        <div class="slideShow">
            <ul>
                <li class="image1 current">
                    <div class="context">
                        <p>Alamin kung anong meron sa Unggoy at Pagong</p>
                        <h2>Ang Unggoy at Pagong</h2>

                    </div>
                    <div class="img-container">
                        <a href="/"><img src="unggoy.png"></a>
                    </div>
                </li>
                <li class="image2">
                    <div class="context">
                        <p>Gusto mo ba makita ang kwento ng isang kalabaw at kambing?</p>
                        <h2>Ang Kalabaw at Kambing</h2>
                    </div>
                    <div class="img-container">
                        <a href="/"><img src="kalabaw.png"></a>
                    </div>
                </li>
                <li class="image3">
                    <div class="context2">
                        <p>Ang Istorya ng isang Langgam at Tipaklong</p>
                        <h2>Ang Langgam at Tipaklonng</h2>
                    </div>
                    <div class="img-container2">
                        <a href="/"><img src="ant.png"></a>
                    </div>
                </li>
                <li class="image4">
                    <div class="context2">
                        <p>Ang Istorya ng isang Langgam at Tipaklong</p>
                        <h2>Ang Langgam at Tipaklonng</h2>

                    </div>
        </div>
        <div class="img-container2">
            <a href="/"><img src="ant.png"></a>
        </div>
        </li>
        </ul>
        </div>
    </header>

    <section class="main">
        <div class="mangas">
            @if (Route::has('login'))
            @auth
            <div class="manga-category">
                <h1>Choose your Favorite Parables</h1>
            </div>
            <div class="manga-content">
                <div class="list-wrap">
                    <div class="jspContainer">
                        <ul class="manga-list">
                            @foreach($product as $products)
                            <li class="manga-item">
                                <a href="{{url('product_details',$products->id)}}" class="manga-link">
                                    <img class="manga-image" src="products/{{$products->image}}"
                                        alt="{{$products->title}}">
                                    <div class="manga-overlay">

                                    </div>
                                    <div class="manga-title">{{$products->title}}</div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @else
            <div class="manga-category">
                <h1>Choose your Favorite Parables</h1>
            </div>
            <div class="manga-content">
                <div class="list-wrap">
                    <div class="jspContainer">
                        <ul class="manga-list">
                            @foreach($product as $products)
                            <li class="manga-item">
                                <a href="{{url('/')}}" class="manga-link">
                                    <img class="manga-image" src="products/{{$products->image}}"
                                        alt="{{$products->title}}">
                                    <div class="manga-overlay">

                                    </div>
                                    <div class="manga-title">{{$products->title}}</div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endauth
            @endif
        </div>
    </section>

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script src="js/main.js"></script>

</html>