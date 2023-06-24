<?php
    $cookie_name = "user";
    $cookie_value = "Saba Konjaria";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Dali</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Header Section -->
        <?php
    if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "<script>alert('Cookie '" . $cookie_name . "' is set!\\nValue is: " . $_COOKIE[$cookie_name] . "');</script>";
    }
    ?>
    <header class="box">
        <div class="logo">
            <a href="#logo" ><img src="images/anch-logo 1.png" alt="logo" /></a>
            <a class="logo-text" href="#logo"><h1>Dali</h1></a>
        </div>
        <nav>
            <a class="header header--active" href="./index.php">Home</a>
            <a class="header" href="./index.php#reviewer">Reviewers</a>
            <a class="header" href="./menu.php">Menu</a>
            <a class="header" href="./contact.php">Contact</a>
            <a class="header" href="./carreers.php">Careers at Dali</a>       
        </nav>
        <div class="icons">
            <img src="images/menu.png" alt="menu" class="menu"/>
        </div>
    </header>
    
    <!-- Home section -->
    
    <section class="home box" id="home">
    
        <img src="images/home-image.png" alt="home-image" class="home-image"/>
       
        <div class="introduction">     
            <h3 class="caption">Dalì - Where the journey begins...</h2>
            <h2>Coffee is the <span>best thing </span>to douse the sunrise with.</h1>
            <p class="author">-Terri Guillemets </p>   
            <div class="btns">
                <a href="#ownMood" class="ownMoodbtn">Get your own mood</a>
                <a href="#references" class="referencesbtn">References</a>
            </div>
        </div>
    </section>
    
    <!-- Promocode to the first user of Dali -->
    
    <div class="promo_wrapper ">
        <img src="images/percentage 1.png" alt="percentage">
        <p>Grand opening at Dali Coffee Shop: First customer enjoys 20% off exceptional coffees and irresistible desserts!</p>
    </div>
    
    <!-- Few words about us -->
    
    <div class="recap">
        <div class="text-side">
            <h3>About us</h3>
            <h2>A few words about us</h2>
            <p class="description">Multiple branches, diverse menu, and a dedicated team, all for the ultimate coffee experience.</p>
            
            <div class="check-box-with-text">
                <img class="check-box" src="images/checkbox.png" alt="check-box"/>
                <p>Where art and coffee unite, creating a cultural haven</p>
            </div>
            
            <div class="check-box-with-text">
                <img class="check-box" src="images/checkbox.png" alt="check-box"/>
                <p>Savor coffee to the sound of jazz in our serene sanctuary.</p>
            </div>
            
            <a class="btn" href="#moreAboutUs" >More About us</a>
        </div>
        <div class="recap-middle">
            <div class="count-with-text">
                <h2 class="count">25</h2>
                <p class="thing">Event Space</p>
            </div>
            <div class="count-with-text">
                <h2 class="count">50<span class="plus">+</span></h2>
                <p class="thing">Private Rooms</p>
            </div>
            <div class="count-with-text">
                <h2 class="count">30<span class="plus">+</span></h2>
                <p class="thing">Professional staff members</p>
            </div>
        </div>
        <img class="right-img" src="images/right-image.png" alt="right-image"/>
    
    </div>
    <!-- More Menu Control -->

    <div class="more-menu">
        <img class="boy-makes-cofee" src="images/boy.png" alt="boy-makes-coffee"/>
        <div class="right-side">
            <h3 class="head">-pick one of yours</h3>
            <h2 class="body">Choose your Favorite</h2>
            <p class="desc">More than 50+ type of coffee are ready to serve by our professionals</p>
            <ul class="top-coffees">
                <li class="coffee-name">Cappuccino<div class="dot"></div></li>
                <li class="coffee-name">Latte<div class="dot"></div></li>
                <li class="coffee-name">Espresso</li>
            </ul>
            <a class="more-menu-btn" href="#Menu" type="button" >More Menu</a>
        </div>
    </div>

    <div class="menu-line"></div>
    
    <!-- end up with music -->

    <div class="music">
        <div class="left-side">
            <h3 class="head">-end up with music</h3>
            <h2 class="body">Complete your coffee
                with our dishes</h2>
            <p class="desc">Enjoy your coffee with our tasty dishes that will build your mood.</p>
            <ul class="top-coffees">
                <li class="coffee-name">Tiramisu<div class="dot"></div></li>
                <li class="coffee-name">Croissant<div class="dot"></div></li>
                <li class="coffee-name">Churros</li>
            </ul>
            <a class="more-menu-btn" href="#Menu" type="button" >More Menu</a>
        </div>    

        <img class="croissants" src="images/croissants.png" alt="croissants"/>
    </div>

    <div class="menu-line"></div>

    <!--  Be comfort in our places -->

    <div class="our-facility">
        <h3 class="head">-our facility</h3>
        <h2 class="body">Be comfort in our places </h2>
        <p class="desc">Our place designed by pro architecture with psychologist to build best place for you.</p>
    </div>

    <!-- Images -->

    <div class="brown">
            <img class="image" src="images/top-left-corner.png" alt="" />
            <img class="image" src="images/top-right-corner.png" alt="" />
            <img class="image" src="images/bottom-left-corner.png" alt="" />
            <img class="image" src="images/bottom-right-corner.png" alt="" />
       
    </div>

    <!-- Reviews  -->

        <div class="parent">
            <div class="child">
                <img src="images/GIRL1.png" alt="">
                <h3>I absolutely love the coffeeshop! The ambiance is modern and inviting, the staff is friendly and knowledgeable, and the latte art they create is a true masterpiece. It's my go-to place for a perfect cup of coffee and creative inspiration.</h3>
                <p>Emily Johnson, Graphic Designer</p>
            </div>
            <div class="child">
                <img src="images/boy2.png" alt="">
                <h3>I absolutely love the coffeeshop! The ambiance is modern and inviting, the staff is friendly and knowledgeable, and the latte art they create is a true masterpiece. It's my go-to place for a perfect cup of coffee and creative inspiration.</h3>
                <p>Emily Johnson, Graphic Designer</p>
            </div>
            <div class="child">
                <img src="images/girl2.png" alt="">
                <h3>I absolutely love the coffeeshop! The ambiance is modern and inviting, the staff is friendly and knowledgeable, and the latte art they create is a true masterpiece. It's my go-to place for a perfect cup of coffee and creative inspiration.</h3>
                <p>Emily Johnson, Graphic Designer</p>
            </div>
        </div>

    <!-- Footer -->
    <img class="pre-footer-img" src="images/family.png" alt="family"/>

    <div class="footer">
            <div class="left_side">
                <div class="logo">
                    <img class="logo-img" src="./images/anch-logo 1(1).png" alt="logo" />
                    <h2>Dalì</h2>
                </div>
                
                <p>Explore Dali Coffee Shop's extensive selection of exquisite coffees and delectable desserts.</p>

                <div class="location">
                    <img class="pin" src="./images/placeholder 1.png" alt="pin"/>
                    <p class="location-details">Epar.Od. Firon-Ormou Perissis, Mesaria 847 00, Greece (General Branch)</p>
                </div>
            </div>
            <div class="info">
                <h3 class="question">
                    Further Inquiries?
                </h3>
                <h4 class="answer">
                    Contact us via email:<a href="mailto:name@email.com">Link text</a>
                </h4>
                <h3 class="question">
                    Wanna Book a table?
                </h3>
                <h4 class="answer">
                    Get in touch with us then: +1 (555) 123-4567
                </h4>
                <ul>
                    <li class="li-items"><img src="images/facebook.png" alt="fb"></li>
                    <li class="li-items"><img src="images/twitter.png" alt="tweet"></li>
                </ul>
            </div>
    </div>


    <div class="post-footer">
        <div class="line"></div>
        <p> 2023  Dali Coffee shop. All rights reserved</p>
    </div>


    <script src="js/script.js"></script>
</body>
</html>