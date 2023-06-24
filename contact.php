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
    
    <header class="box">
        <div class="logo">
            <a href="#logo" ><img src="images/anch-logo 1.png" alt="logo" /></a>
            <a class="logo-text" href="#logo"><h1>Dali</h1></a>
        </div>
        <nav>
        <a class="header " href="./index.php">Home</a>
            <a class="header" href="./index.php#reviewer">Reviewers</a>
            <a class="header" href="./menu.php">Menu</a>
            <a class="header header--active" href="./contact.php">Contact</a>
            <a class="header" href="./carreers.php">Careers at Dali</a> 
        </nav>
        <div class="icons">
            <img src="images/menu.png" alt="menu" class="menu"/>
        </div>
    </header>

    <!-- Main Content -->

    <section class="contact-us-content">
        <div class="contact-left">
            <h2>Epar.Od. Firon-Ormou Perissis, Mesaria 847 00, Greece (General Branch)</h2>
            <h3>Masaria, Greece</h3>
            <a class="maps-btn" href="https://www.google.com/maps/place/Epar.Od.+Firon-Ormou+Perissis,+Mesaria,+Greece/@36.3942966,25.4441349,17z/data=!3m1!4b1!4m6!3m5!1s0x1499cdd11a5bf5cf:0xe249bff4f647fc6b!8m2!3d36.3942966!4d25.4463236!16s%2Fg%2F119vpj_fn?entry=ttu" target="_blank">View in maps</a>
        </div>
    
        <form>
            <h1>Contact Us</h1>
            <input class="fname" type="text" name="fname" id="fname" placeholder="*First Name"/>
            <input class="lname" type="text" name="lname" id="lname" placeholder="*Last Name"/>
            <input class="email" type="email" name="email" id="email" placeholder="*Email"/>
            <textarea name="message" id="message" placeholder="*Message"></textarea>
            <input type="submit" value="Send Message"/>
        </form>
    </section>

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
        <p>&copy; 2023  Dali Coffee shop. All rights reserved</p>
    </div>


    <script src="js/script.js"></script>
</body>
</html>