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

.center {
    margin: auto;
    width: 70%;
    text-align: center;
    padding: 30px;
}

table,
th,
td {

    border: 1px solid black;
    background-color: skyblue;
}

.th_deg {
    font-size: 20px;

}

.img_deg {
    height: 150px;
    width: 150px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}



th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}



.btn {
    margin: 5px;
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
    <br><br><br><br><br><br>
    <div class="center">
        <div class="center">
            <table>
                <tr>
                    <th class="th_deg">Product title</th>
                    <th class="th_deg">Product Image</th>
                    <th class="th_deg">Delete Action</th>
                    <th class="th_deg">Read Action</th>
                </tr>
                @foreach($bookmarks as $bookmark)
                <!-- Changed variable name to $bookmarks -->
                <tr>
                    <td>{{ $bookmark->product_title }}</td>
                    <td><img class="img_deg" src="/products/{{ $bookmark->image }}" alt="{{ $bookmark->product_title }}"
                            width="50" height="50"></td>
                    <td>
                        <a class="btn btn-danger" href="{{url('/remove_bookmark',$bookmark->id)}}">DELETE</a>
                    </td>
                    <td>
                        <form action="{{url('popular_wrote',$bookmark->product->id)}}" method="GET">
                            <button type="submit" class="read-button">READ</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


</body>

<script src=" http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script src="js/main.js"></script>

</html>