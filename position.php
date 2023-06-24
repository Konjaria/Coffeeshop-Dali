<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="Saba_Konjaria-123";
$dbname="positions";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
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
    
    <header class="box">
        <div class="logo">
            <a href="#logo" ><img src="images/anch-logo 1.png" alt="logo" /></a>
            <a class="logo-text" href="#logo"><h1>Dali</h1></a>
        </div>
        <nav>
        <a class="header" href="./index.php">Home</a>
            <a class="header" href="./index.php#reviewer">Reviewers</a>
            <a class="header" href="./menu.php">Menu</a>
            <a class="header" href="./contact.php">Contact</a>
            <a class="header  header--active" href="./carreers.php">Careers at Dali</a> 
        </nav>
        <div class="icons">
            <img src="images/menu.png" alt="menu" class="menu"/>
        </div>
    </header>

    <!-- end of header -->
    <section class="content">
    <?php 
        if (isset($_GET['id'])) {
            $sql="Select * from careers where id=3";
            $output = mysqli_query($con, $sql);


            $selectedId = mysqli_real_escape_string($con, $_GET['id']);
            $selectedRSql = "SELECT * FROM Careers WHERE id ='$selectedId'";
            $IdResult = mysqli_query($con, $selectedRSql);
    
            if ($IdResult) {
                $row = mysqli_fetch_assoc($IdResult);
                echo '<div class="position-desc">
                    <div class="left-side">
                        <a href="./carreers.php" class="back-btn">< Back to list</a>
                        <h1>'.$row['position_name'].' - he/she/they</h1>
                        <h3>'. $row['position_department'] .'</h3>
                        <div class="line"></div>
                        <div class="desc">'. $row['description'].'</div>
                    </div>
    
                        <a href="#apply" class="right-side">Apply</a>
                    </div>';
            }
        }
    ?>
    </section>

    <!--  Main Content of this webpage  -->


    <form method="post" id="apply" >
  <div class="left-hand">
    <h1>Apply for a new Role</h1>
    <input class="fname sm" type="text" name="fname" id="fname" placeholder="*First Name" required />
    <input class="lname sm" type="text" name="lname" id="lname" placeholder="*Last Name" required />
    <input class="email sm" type="email" name="email" id="email" placeholder="*Email" required />
    <label class="lbl" name="english-level">What is your English level?</label>
    <ul>
      <li>
        <input type="radio" name="english-level" value="nothing">
        <label class="lbl" for="nothing">I don't speak English</label>
      </li>
      <li>
        <input type="radio" name="english-level" value="beginner">
        <label class="lbl" for="beginner">Beginner</label>
      </li>
      <li>
        <input type="radio" name="english-level" value="intermediate">
        <label class="lbl" for="intermediate">Intermediate</label>
      </li>
      <li>
        <input type="radio" name="english-level" value="advanced">
        <label class="lbl" for="advanced">Advanced</label>
      </li>
    </ul>

    <div class="policy">
      <input class="check" type="checkbox" name="terms-conditions" id="terms-conditions" required>
      <label class="lbl terms-policy" for="terms-conditions">I have read terms and conditions along with privacy policy information</label>
    </div>
    <input class="alert-btn" type="submit" value="Send Message" name="submit"/>
  </div>
  <div class="right-side">
    <input class="input-file" type="file" name="cv" required>
    <label for="cv" class="lbl">Please upload PDF, DOCX, DOC, TXT (Max 2MB)</label>

    <input class="input-file" type="file" name="cover-letter">
    <label for="cover-letter" class="lbl">Please upload PDF, DOCX, DOC, TXT (Max 2MB)</label>
  </div>
</form>

    
    
    
    
    <!-- end of main content -->

    <?php
        if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $englishLevel = $_POST['english-level'];

    $txt = "First Name: $fname\n" .
            "Last Name: $lname\n" .
            "Email: $email\n" .
            "English Level: $englishLevel\n" .
            "------------------------\n\n\n";
    
    $myfile = fopen("output/records.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $txt);
    echo '<script>alert("We got your request, Good Luck!");</script>';
    fclose($myfile);
    }
    ?>


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
