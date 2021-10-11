<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c61cdb8776.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <div class="header">
        <div class="container" id="container">
            <div class="nav-bar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" id="logo" /></a>
                </div>
                <nav id="myNav">
                    <input type="checkbox" id="check" onclick="overflowFunction();" />
                    <label for="check" class="checkbtn">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </label>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <!-- <li><a href="#">Articles</a></li> -->
                        <li><a href="contact.html">Contact</a></li>
                        <!--<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>-->
                    </ul>
                </nav>
                <div class="cart">
                    <a href="#"><img src="images/bag.png" style="height:40px; width:50px;" /></a>
                    <a href="login.html"><img src="images/account.png" style="height:40px; width:45px;" /></a>
                </div>
            </div>
        </div>
        <!-- ---------------------small-nav---------------------------------------------------->
        <div class="nav-container">
            <div class="small-nav-bar">
                <nav>
                    <div class="dropdown">
                        <button class="dropbtn">Reusable Products</button>
                        <div class="dropdown-content">
                            <a href="grocery_bag.html">Grocery Bags</a>
                            <a href="#">Lunch Box</a>
                            <a href="#">Water Bottles</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Plastic Free Products</button>
                        <div class="dropdown-content">
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Recycled Products</button>
                        <div class="dropdown-content">
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- -----------------------------------------------form container------------------------------------------------- -->
    <div class="contact-container">
        <div class="col-2">

            <div class="form">
                <h1>Contact Information</h1>
                <hr>
                <label for="name">
                    <h3>Name</h3>
                </label>
                <input type="text" id="name">
                <label for="email">
                    <h3>Email</h3>
                </label>
                <input type="email" id="email">
                <label>
                    <h3>Description</h3>
                </label>
                <textarea placeholder="Describe your issue..."></textarea>
                <button type="submit" href="#" onclick="alert('Response has been recorded!')">Submit</button>
            </div>
        </div>
        <div class="col-2">
            <div class="address">
                <h1>Address</h1>
                <hr>
                <p>EC Ltd<br>
                Unit 4 Bessemer Park<br>
                Bessemer Road<br>
                Basingstoke<br>
                RG21 3NB<br><br>

                <b>Telephone:</b>
                01256 262 780<br>

                <b>Email:</b>
                sales@eco-merch.co.uk</p>
            </div>
        </div>
    </div>
    <!--------------------------------FOOTER----------------------------------------------->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <p>Explore</p>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="article.html">Articles</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.png" />
                    <p>We are here to provide you the hand to be the superhero, the world wants you to be.</p>
                </div>
                <div class="footer-col-3">
                    <div class="footer-row">
                        <h3>Follow our socials</h3>
                        <ul>
                            <li class="facebook"><a href="https://www.facebook.com/dmcecolg/"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/d_mc_e"><i
                                        class="fab fa-twitter-square"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/explore/tags/dmce/?hl=en"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="youtube"><a href="https://www.youtube.com/channel/UCGF7OHVqV0jn6e9e6FHPuAg"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />
            <p class="copyright">Copyright 2020 - Datta Meghe College of Engineering</p>
        </div>
    </div>



<script src="js/script.js"></script>
</body>

</html>