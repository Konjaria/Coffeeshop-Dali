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
        <a class="header " href="./index.php">Home</a>
            <a class="header" href="./index.php#reviewer">Reviewers</a>
            <a class="header" href="./menu.php">Menu</a>
            <a class="header" href="./contact.php">Contact</a>
            <a class="header header--active" href="./carreers.php">Careers at Dali</a> 
        </nav>
        <div class="icons">
            <img src="images/menu.png" alt="menu" class="menu"/>
        </div>
    </header>



    <div class="content">
        <div class="intro-to-carrers">
            <h1>Unleash your potential with Dali</h1>
            <p>Dali values diversity and fair opportunity. We do not make any distinctions based on race, religion, color, national origin, gender, sexual orientation, age, marital status, or disability status. If you require any special accommodations throughout the employment process, please indicate so on the application form. </p>
        </div>
        <div class="search-staff">
            <div class="left">
                <div class="dropdown">
                    <button class="dropbtn">Select Location</button>
                    <div class="dropdown-content">
                        <?php    
                            // <a href="#">Link 1</a>
                            $sql="SELECT DISTINCT position_country FROM Careers";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                $num=mysqli_num_rows($result);
                                if($num == 0){
                                    echo "<p>no results</p>";
                                }
                                if($num > 0){
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $country = $row['position_country'];
                                        echo '<a href="?country=' . urlencode($country) . '">'.$country.'</a>';
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Select Department</button>
                    <div class="dropdown-content">
                    <?php    
                            // <a href="#">Link 1</a>
                            $sql="SELECT DISTINCT position_department FROM Careers";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                $num=mysqli_num_rows($result);
                                if($num == 0){
                                    echo "<p>no results</p>";
                                }
                                if($num > 0){
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $department = $row['position_department'];
                                        echo '<a href="?department=' . urlencode($department) . '">'.$department.'</a>';
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>

                <a class="alert-btn" href="#someone">Create Alert</a>
            
            </div>
            <p></p>
            <div class="right">
                <form method="post">
                    <input type="text" name="search" placeholder="Type a position or keyword">
                    <button name="submit">Search</button>
                </form>
                <div class="result">
                    <?php 
                    if(isset($_POST['submit'])){
                        $search=$_POST['search'];

                        $sql = "SELECT * FROM Careers WHERE id LIKE '%$search%' OR position_name LIKE '%$search%' OR position_department LIKE '%$search%' OR position_country LIKE '%$search%'"; 
                        $result=mysqli_query($con,$sql);

                                            
                                                    
                        if($result){
                            $num=mysqli_num_rows($result);
                            if($num == 0){
                                echo "<h1 class='data-not-found'>Data Not Found</h1>";
                            }
                            if($num > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<div class="position">
                                    <a class="position-name" href="./position.php?id=' . urlencode($row['id']).'">' . $row['position_name'] . '</a>
                                    <a class="department"  href="./position.php?id=' . urlencode($row['id']).'">' . $row['position_department'] . ' | ' . $row['position_country'] . '</a>
                                    <div class="line"></div>
                                </div>';
                                }
                            }
                        }
                    } 
                        if (isset($_GET['country'])) {
                            $selectedCountry = mysqli_real_escape_string($con, $_GET['country']);
                            $countrySql = "SELECT * FROM Careers WHERE position_country='$selectedCountry'";
                            $countryResult = mysqli_query($con, $countrySql);
                    
                            if ($countryResult) {
                                $num = mysqli_num_rows($countryResult);
                                if ($num == 0) {
                                    echo "<h1 class='data-not-found'>Data Not Found</h1>";
                                } else {
                                    while ($row = mysqli_fetch_assoc($countryResult)) {
                                        echo '<div class="position">
                                        <a class="position-name" href="./position.php?id=' . urlencode($row['id']).'">' . $row['position_name'] . '</a>
                                        <a class="department"  href="./position.php?id=' . urlencode($row['id']).'">' . $row['position_department'] . ' | ' . $row['position_country'] . '</a>
                                        <div class="line"></div>
                                    </div>';
                                    }
                                }
                            }
                        }
                        else if (isset($_GET['department'])) {
                            $selectedDepartment = mysqli_real_escape_string($con, $_GET['department']);
                            $departmentSql = "SELECT * FROM Careers WHERE position_department='$selectedDepartment'";
                            $departmentResult = mysqli_query($con, $departmentSql);
                    
                            if ($departmentResult) {
                                $num = mysqli_num_rows($departmentResult);
                                if ($num == 0) {
                                    echo "<h1 class='data-not-found'>Data Not Found</h1>";
                                } else {
                                    while ($row = mysqli_fetch_assoc($departmentResult)) {
                                        echo '<div class="position">
                                        <a class="position-name" href="./position.php?id=' . urlencode($row['id']).'">' . $row['position_name'] . '</a>
                                        <a class="department"  href="./position.php?id=' . urlencode($row['id']).'">' . $row['position_department'] . ' | ' . $row['position_country'] . '</a>
                                        <div class="line"></div>
                                    </div>';
                                    }
                                }
                            }
                        } else {
                            $initial_sql="select * from careers";
                            $initial_result=mysqli_query($con,$initial_sql);
    
                            $num=mysqli_num_rows($initial_result);
                            if($num == 0){
                                echo "<h1 class='data-not-found'>Data Not Found</h1>";
                            }
                            if($num > 0){
                                while($row = mysqli_fetch_assoc($initial_result)){
                                    echo '<div class="position">
                                            <a class="position-name" href="./position.php?id=' . urlencode($row['id']).'">' . $row['position_name'] . '</a>
                                            <a class="department"  href="./position.php?id=' . urlencode($row['id']).'">' . $row['position_department'] . ' | ' . $row['position_country'] . '</a>
                                            <div class="line"></div>
                                        </div>';
                                }
                            }
                        }
                        
                    ?>
                </div>
            </div>
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
    <p>&copy; 2023  Dali Coffee shop. All rights reserved</p>
</div>


<script src="js/script.js"></script>
</body>
</html>