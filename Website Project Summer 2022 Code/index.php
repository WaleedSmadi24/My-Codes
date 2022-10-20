<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:SignIn.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smadico | Where Dreams Comes True </title>
        <link rel="shortcut icon" href ="Images/TransperentPNG .png"> 
        <link rel="stylesheet" href="CSS/Smadico.css">

        <meta name="description" content="Smadico for Selling Apartments">
        <meta name="keywords" content="Real Estate, Houses, Apartments, Buy, Rent, Smadico, Smadico Real Estates, Waleed Smadi">
        <meta name="author" content="Waleed Smadi">
        <meta name="viewport" content="width=device-width, initial scale = 1.0">

    </head>

    <body style="background-color: black;">
        
        <!-- Header Code  -->
        <header>

            <nav>
                
                <a href="index.php">
                    <img class="LogoPhoto" src="Images/SmadicoLogo4.png" alt='Smadico Logo'>
                </a>
                
                <div class="NavBar">
        
                    <a href="index.php" class="link"> Home</a>
                    <a href="Villa.php" class="link"> Villas</a>
                    <a href="Feedbacks.php" class="link"> Feedback</a>
                    <a href="AboutUs.php" class="link"> About Us</a> 
                    

                </div>
                
                <div class="RegBar">
                    <a href="SignIn.php" class="link"> Sign In</a>
                    <a href="SignUp.php" class="link"> Sign Up</a>
                </div>

            </nav>

        </header>

        <br><br>
        <!-- End of Header Code  -->

        <!-- BackGround Main Photo -->
        <img class="BackPhoto" src="Images/Villa1.jpg" alt="Smadico Projects">

        <!-- In Photo Text  -->
        <h2 class="inphototext">Smadico | Where Dreams Comes True.</h2>

        <br><br><br><br>

        
        <!-- Footer HTML Code -->
        <footer>
            
            <div class="FooterAbout">

                <h3> About </h3>
                <p> 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repellendus nulla pariatur
                </p>

            </div>
            
            <div class="FooterCategories">

                <h3> Categories </h3>
                <a href="index.php" class="afooter"> Home Page </a>
                <br><br>
                <a href="Villa.php" class="afooter"> Villas </a>
                <br><br>
                <a href="Feedbacks.php" class="afooter"> Feedback </a>
                <br><br>
                <a href="AboutUs.php" class="afooter"> About Us </a>

            </div>

            <div class="FooterContact">

                <h3> Contact Us </h3>
                +96278200000

            </div>

        </footer>
        <!-- End Of Footer HTML Code -->

        <br><br><br>

        <hr>

        <p class="CopyRight">Copyright &copy; 2022 All Rights Reserved To Smadico Real Estate Company.</p>

    </body>
    
</html>