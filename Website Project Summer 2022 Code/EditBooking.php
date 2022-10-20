<?php
    require 'Connection.php';
    
    $id = $_POST['id'];
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $sql = "UPDATE appointments SET dateofbooking = :dateofbooking,timeofbooking = :timeofbooking where id=:id";
        $statement = $pdo->prepare($sql);
        $dateofbooking = $_POST['dateofbooking'];
        $timeofbooking = $_POST['timeofbooking'];

        $statement->bindParam(':dateofbooking',$dateofbooking, PDO::PARAM_STR);
        $statement->bindParam(':timeofbooking',$timeofbooking, PDO::PARAM_STR);
        $statement->bindParam(':id',$id, PDO::PARAM_INT);
        
        $statement->execute();

    }

    echo '<h2 style= "color:white;"> Booking Date and Time has been updated successfully</h2> <br>';
    $sql = "SELECT * FROM appointments where id=$id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $data=$statement->fetchAll();

    echo '<h2 style= "color:white;">';
    foreach($data as $row)
    {
        echo $row['dateofbooking']. ' ' . $row['timeofbooking'];
        echo "<br>";
    }
    echo '</h2>';
    $pdo = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Booking </title>
    <link rel="shortcut icon" href ="Images/TransperentPNG .png"> 
    <link rel="stylesheet" href="CSS/Booking.css">
    
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
    <!-- End of Header Code  -->

    <a href="ViewAllBooking.php"> View Appointments </a>

    <!-- Footer HTML Code -->
    <footer>
            
            <div class="FooterAbout">

                <h3> About </h3>
                <p> 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repellendus nulla pariatur, in modi sequi dignissimos amet
                    illum asperiores ullam alias Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Impedit cum voluptatum voluptate tempora distinctio amet id magni, fugiat autem sint sed eum hic? 
                    Error nulla ab mollitia beatae asperiores distinctio harum iure illo suscipit natus aut dolore, 
                    reprehenderit consectetur sint tempora laboriosam rem porro?
                    Totam deserunt temporibus inventore iste quidem.
                </p>

            </div>
            
            <div class="FooterCategories">

                <h3> Categories </h3>
                <a href="index.php"> Home Page </a>
                <br><br>
                <a href="Villa.php"> Villas </a>
                <br><br>
                <a href="Feedbacks.php"> Feedback </a>
                <br><br>
                <a href="AboutUs.php"> About Us </a>

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




