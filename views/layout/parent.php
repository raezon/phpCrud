<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>online_shoping</title>
    <link rel="stylesheet" href="web/assets/css/layout.css">
    <script src="web/assets/js/script.js"></script>
</head>

<body>
    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <li id="account"><a href="login.html"><i class="fa fa-user-circle" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-outdent" aria-hidden="true"></i>
        </div>
    </section>

    <main>
        <?= $this->section('content') ?>
    </main>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> DV Group of Companies,Pitam Pura,
                Delhi-110034, India</p>
            <p><strong>Phone:</strong> +91 7865654598 / 2756765764</p>
            <p><strong>Hours:</strong> 10:00 -10:00, Mon-Sat </p>
            <div class="follow">
                <h4>follow us</h4>
                <div class="icon">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us </a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My order</a>
            <a href="#"> Help </a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2023,Rahul -Ecommerce Template </p>
        </div>

    </footer>

    <script>

        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translatex(0px)";
            Indicator.style.transform = "translatex(100px)";
        }
        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translatex(300px)";
            Indicator.style.transform = "translatex(0px)";
        }


    </script>
    <script src="script.js">
    </script>
</body>

</html>