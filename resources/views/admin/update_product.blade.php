<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nobela Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="logooo.png" />
    <style type="text/css">
    .div-center {
        text-align: center;
        padding-top: 40px;
    }

    .center {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
    }

    .font_size {
        font-size: 40px;
        padding-bottom: 40px;
    }

    .text_color {
        color: black;
        padding-bottom: 20px;
    }

    label {
        display: inline-table;
        width: 150px;
    }

    .div_design {
        padding-bottom: 15px;
    }

    .text_colorr {
        width: 100%;
        /* make the textarea take up the full width of its container */
        height: 200px;
        /* increase the height of the textarea */
        padding: 10px;
        /* add some padding to make the textarea more comfortable to use */
        font-size: 16px;
        /* increase the font size to make the text easier to read */
    }

    .sidebar .sidebar-brand-wrapper .sidebar-brand img {
        width: calc(244px - 120px);
        max-width: 100%;
        height: 100px;
        margin: auto;
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="logooo.png" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="logooo.png" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Products</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{'/view_product'}}">Add Products</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/show_product')}}">Show
                                    Products</a></li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('view_category')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Catergory</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                            alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>

                    <ul class="navbar-nav navbar-nav-right">
                        <li>
                            @if (Route::has('login'))
                            @auth
                        <li class="">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="navbar"><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                        @endif
                        </li>


                    </ul>

            </nav>
            <!-- partial -->

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                    </div>
                    {{session()->get('message')}}

                    @endif
                    <div class="div-center">
                        <h1 class="font_size">Update Products</h1>
                        <form action="{{url('/update_product_confirm',$product->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="div_design">
                                <label>Product Title </label>
                                <input class="text_color" name="title" placeholder="Write item title" required
                                    value="{{$product->title}}">
                            </div>
                            <div class="div_design">
                                <label>Product Description </label>
                                <input class="text_color" type="text" name="description" placeholder="Write item title"
                                    required value="{{$product->description}}">
                            </div>
                            <div class="div_design">
                                <label>Product Image </label>
                                <input class="text_color" type="file" name="image" placeholder="Write item title"
                                    required value="">
                                <img style="margin:auto;" height="100" width="100" src="/products/{{$product->image}}">
                            </div>
                            <div class="div_design">
                                <label>Product Rating</label>
                                <input class="text_color" type="number" name="rating" min="1" max="5" step="1" required>
                                <option value="{{$product->rating}}" selelected="">{{$product->rating}}
                                </option>
                            </div>
                            <div class="div_design">
                                <label>Product Genre </label>
                                <select class="text_color" type="text" name="genre" placeholder="Write item genre"
                                    required>
                                    <option value="{{$product->genre}}" selelected="">{{$product->genre}}
                                    </option>
                                    @foreach($category as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="div_design">
                                <label>Product Body </label>
                                <textarea class="text_colorr" type="text" name="body" placeholder="Write item title"
                                    required></textarea>
                            </div>
                            <div class="div_design">

                                <input type="submit" value="Update Product" class="btn btn-primary">
                            </div>
                        </form>


                    </div>

                </div>
            </div>
            <!-- main-panel ends -->
        </div>

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinjecadmin/t -->
    <!-- Plugin jadmin/s for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugadmin/in js for this page -->
    <!-- inject:jadmin/s -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinjecadmin/t -->
    <!-- Custom jadmin/s for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>