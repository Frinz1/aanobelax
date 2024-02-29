<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Message us</title>
    <link rel="shortcut icon" href="pic-cs_white_logo.png" />
    <link rel="shortcut icon" type="image " href="assets/image/logo-black.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    :root {
        --gradient: linear-gradient(90deg, #ffb20c, #ffb20c);
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        outline: none;
        transition: all .2s linear;
    }

    *::selection {
        background: #fff;
        color: #333;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
    }

    body {
        background: #f0f0f0;
    }

    section {
        padding: 0 7%;
    }

    .heading {
        text-align: center;
        font-size: 3.5rem;
        color: #000000;
        padding: 1rem;
        padding-top: 8.5rem;
        width: 50rem;
        margin: 0 auto;
    }

    header {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        padding: 0.5rem 7%;
        background-color: #2c2f33;

    }

    header .logo {
        width: 60px;
        cursor: pointer;
    }

    .logo-name {
        margin-left: -750px;
        color: #fff;
        font-size: 13px;
    }

    header .navbar ul {
        display: flex;
        align-items: center;
        justify-content: center;
        list-style: none;
    }

    header .navbar ul li a {
        font-size: 1.8rem;
        margin-left: 1rem;
        color: #fff;
        position: relative;
        font-weight: 400;
        margin-right: 3rem;
    }

    header .navbar ul li a::before {
        content: '';
        position: absolute;
        bottom: -.5rem;
        right: 0;
        height: .2rem;
        width: 0%;
        transition: .2s linear;
    }

    header .navbar ul li a.active::before,
    header .navbar ul li a:hover::before {
        background: #fff;
        left: 0;
        width: 100%;
        opacity: 1.0;
        align-items: center;
        justify-content: center;
    }

    header #menu {
        font-size: 3rem;
        color: #fff;
        cursor: pointer;
        display: none;
    }

    .scrolling-active {
        box-shadow: 0 3px 1rem rgba(0, 0, 0, .1);
        background-color: #424952;
        opacity: 1.0;
    }

    .scrolling-active header {
        height: 6.6rem;
    }

    .scrolling-active .navbar {
        color: #000000;
    }

    .home {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        background: url(https://www.islandlife.lk/wp-content/uploads/2018/07/b5a1bb64-best_beach_hotels_in_sri_lanka.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding-top: 9rem;
    }

    .home .content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        left: 0;
        right: 0;
        margin: 0 auto;
        width: 700px;
        height: 400px;
        background-color: rgba(0, 0, 0, .5);
        color: #fff;
    }

    .home .content h1 {
        font-size: 6rem;
        color: #fff;
        opacity: 1.0;
    }

    .home .content p {
        font-size: 2rem;
        color: #fff;
        padding: 1rem 0;
    }

    .btn1 {
        border-radius: 5px;
        padding: .4rem 1rem;
        font-size: 1.8rem;
        margin: 0.3rem 0 0 8px;
        display: flex;
        cursor: pointer;
        border: none;
        background: #004CFF;
        box-shadow: 1px 1px 20px 1px #004CFF;
        color: #fff;
        border: 1px solid white;
    }

    .btn1:hover {
        background: #006DFF;
        color: #fff;
    }

    .btn2 {
        border-radius: 5px;
        padding: .6rem 3rem;
        font-size: 2rem;
        margin-top: 1rem;
        cursor: pointer;
        border: none;
        background: rgb(217, 82, 0, 0.8);
        color: #fff;
        z-index: 1;
        border: 1px solid white;
    }

    .btn2:hover {
        background: #ffb20c;
        color: #fff;
        opacity: 0.8;
    }

    .booking-form {
        min-height: 20vh;
    }

    .cards-list {
        z-index: 0;
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .card {
        margin: 30px auto;
        width: 300px;
        height: 300px;
        border-radius: 40px;
        box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
        cursor: pointer;
        transition: 0.4s;
    }

    .card .card_image {
        width: inherit;
        height: inherit;
        border-radius: 40px;
    }

    .card .card_image img {
        width: inherit;
        height: inherit;
        border-radius: 40px;
        object-fit: cover;
    }

    .card .card_title {
        text-align: center;
        border-radius: 0px 0px 40px 40px;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 30px;
        margin-top: 20px;
        height: 40px;
    }

    .card:hover {
        transform: scale(0.9, 0.9);
        box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25), -5px -5px 30px 15px rgba(0, 0, 0, 0.22);
    }

    .title-card {
        color: 002116;
    }

    @media all and (max-width: 500px) {
        .card-list {
            /* On small screens, we are no longer using row direction but column */
            flex-direction: column;
        }
    }

    .card {
        margin: 50px auto;
        width: 300px;
        height: 300px;
        border-radius: 40px;
        background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-repeat: no-repeat;
        box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
        transition: 0.4s;
    }

    .footer {
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .footer .credit {
        padding: 2rem 1rem;
        color: white;
        background: #2c2f33;
        text-align: center;
        font-size: 1.5rem;
        box-shadow: rgba(0, 0, 0, 0.8) 0px 5px 15px;
        padding-bottom: 1.5rem;
    }

    .footer .credit a {
        color: #637CBB;
    }

    /* media queries  */
    @media (max-width:768px) {
        html {
            font-size: 55%;
        }

        header #menu {
            display: block;
        }

        header .navbar {
            position: fixed;
            top: -120%;
            left: 0;
            width: 100%;
            background: #fff;
        }

        header .navbar ul {
            flex-flow: column;
            padding: 2rem;
        }

        header .navbar ul li {
            width: 100%;
            text-align: center;
        }

        header .navbar ul li a {
            display: block;
            background: #d95300;
            margin: 1rem 0;
            padding: 1rem;
            font-size: 2.5rem;
            z-index: 0;
        }

        header .navbar ul li a::before {
            height: 100%;
            bottom: 0;
            z-index: -1;

        }

        header .navbar ul li a:hover {
            background: #ffb20c;
            color: #000;
        }

        .fa-times {
            transform: rotate(180deg);
        }

        header .navbar.nav-toggle {
            top: 7.4rem;
        }

        .home .content {
            text-align: center;
        }

        .core .row .image {
            display: none;
        }

        .contact .content {
            padding: 3rem 0;
        }
    }

    @media (max-width:600px) {
        html {
            font-size: 50%;
        }

        .home .content h1 {
            font-size: 4rem;
        }

        .home .image img {
            height: auto;
            width: 90%;
        }

        .heading {
            width: auto;
        }

        .product .box-container .box {
            flex-flow: column;
        }

        .product .box-container .box .image img {
            width: 85%;
            border: none;
        }

        .logo-name {
            margin-left: -220px;
        }
    }

    .contact {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        padding-top: 1rem;
        padding-bottom: 4rem;
    }

    .contact form {
        flex: 1 1 40rem;
        background: #fff;
        padding: 3rem;
        box-shadow: 0 0 1rem rgba(0, 0, 0, .5);
    }

    .contact form .box {
        height: 5rem;
        width: 100%;
        background: none;
        border: none;
        border-bottom: .1rem solid #ccc;
        font-size: 2rem;
        margin: 1rem 0;
        color: #000;
        text-transform: none;
    }

    .contact form textarea {
        height: 15rem;
        width: 100%;
        background: none;
        border: none;
        border-bottom: .1rem solid #ccc;
        font-size: 2rem;
        margin: 1rem 0;
        color: #000;
        text-transform: none;
        resize: none;
    }

    .contact form .box::placeholder,
    .contact form textarea::placeholder {
        text-transform: capitalize;
    }

    .contact form .box:focus,
    .contact form textarea:focus {
        border-color: #637CBB;
    }

    .contact form .submit-btn {
        width: 100%;
    }

    .contact .content {
        flex: 1 1 40rem;
        padding: 4rem;
    }

    .contact .content h3 {
        font-size: 4rem;
        color: #002116;
    }

    .contact .content p {
        font-size: 1.4rem;
        color: #002116;
        padding: 1rem 0;
    }

    .contact .content .icons {
        display: flex;
        align-items: center;
    }

    .contact .content .icons p {
        font-size: 2rem;
        color: #002116;
    }

    .contact .content .icons i {
        font-size: 2rem;
        color: #002116;
        padding-right: 1rem;
    }

    .submit-btn {
        padding: .9rem 3rem;
        font-size: 2rem;
        margin-top: 1.5rem;
        cursor: pointer;
        border: none;
        background: #004CFF;
        box-shadow: 1px 1px 5px 1px #004CFF;
        color: #fff;
        border-radius: 10px;
    }

    .submit-btn:hover {
        background: #006DFF;
        color: #fff;
    }

    /*banner info*/
    .sub-header {
        height: 50vh;
        width: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(https://64.media.tumblr.com/62d7f8330ee6415ec14ed877c23b7a40/666f3e61f91861ea-5a/s1280x1920/9ae91c1e00ec143478400c4bd60c88ce63dcb095.jpg);
        background-position: center;
        background-size: cover;
        text-align: center;
        margin-bottom: 20px;
    }

    .sub-header h1 {
        padding-top: 160px;
        color: #fff;
        font-size: 6rem;
        text-align: center;
        align-items: center;
        font-weight: 500;
    }
    </style>
</head>

<body>
    <!-- ito yung navigation bar -->
    <header>
        <a href="home.php">
            <img class="logo" src="assets/image/logo-black.png" alt="cslogo">
        </a>
        <div class="logo-name">
            <h2>COSRENT</h2>
        </div>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="rooms.php">COSTUMES</a></li>
                <li><a href="about_us.php">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <?php
						if(!isset($_SESSION["active"])){echo '<a href="book_now.php"><button class="btn1" id="btn1">RENT NOW</button></a>';}
						else{
							if($_SESSION["active"] == "admin"){echo '<a href="bookings.php"><button class="btn1" id="btn1">RENTALS</button></a>';}
							else{echo '<a href="book_now.php"><button class="btn1" id="btn1">RENT NOW</button></a>';}
							echo '<a href="logout.php"><button class="btn1" id="btn1">LOG OUT</button></a>';
						}
					?>
            </ul>
        </nav>
    </header>
    <section class="sub-header">
        <h1 id="bannertxt">
            CONTACT US
        </h1>
    </section>

    <!-- contact section starts  -->
    <?php
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$name = ucwords($_POST["name"]);
				$email = $_POST["email"];
				$num = $_POST["num"];
				$message = $_POST["message"];
				$sql = "INSERT INTO contact (name, email, num, message) VALUES ('$name', '$email', '$num', '$message')";
				$conn->query($sql);
				echo '<script>if( window.history.replaceState ) window.history.replaceState( null, null, window.location.href );</script>';
				echo '<h1 style="text-align: center;"><br>Your message has been sent successfully</h1>';
			}
			mysqli_close($conn);
			ob_end_flush();
		?>
    <section class="contact" id="contact">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1 style="text-align: center; font-size: 24px;">Message Us</h1>
            <input class="box" name="name" type="text" placeholder="name" required="">
            <input class="box" name="email" type="email" placeholder="your email" required="">
            <input class="box" name="num" type="text" placeholder="your number" required="">
            <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
            <input type="submit" class="submit-btn" value="Send Message">
        </form>


        <div class="content">
            <h3>CosRent &nbsp| <br>Contact Information</h3>
            <div class="icons"> <i class="fas fa-map-marker-alt"></i>
                <p>180 Greenwich Street, New York, NY 10007
                    United States</p>
            </div>
            <div class="icons"> <i class="fas fa-phone"></i>
                <p>(+63) 969.0420.069</p>
            </div>
        </div>
    </section>
    <!-- contact section ends -->

    <div class="footer">
        <h1 class="credit">© 2022<br>
            Dexter B. Ortiz<br>
            Jan Martin U. Unay<br>
            A final project for Human Computer Interaction 2
        </h1>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>
    <script>
    window.addEventListener('scroll', function() {
        let header = document.querySelector('header');
        let windowPosition = window.scrollY > 0;
        header.classList.toggle('scrolling-active', windowPosition);
    })
    </script>
</body>

</html>