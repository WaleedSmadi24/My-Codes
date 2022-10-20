<?php
    require 'Connection.php';
    $dateofbooking='';
    $timeofbooking='';
   

    $sql = "SELECT * FROM appointments where id=:id";
    $statement = $pdo->prepare($sql);

    $id = $_GET['id'];
    $statement->bindParam(':id',$id, PDO::PARAM_INT);

    $statement->execute();

    $data=$statement->fetchAll();
    echo "<h2>";
    foreach($data as $row)
    {
        $dateofbooking=$row['dateofbooking'];
        $timeofbooking=$row['timeofbooking'];

        echo $row['dateofbooking']. ' ' . $row['timeofbooking'];
        echo "<br>";
    }
    echo "</h2>";

    if(isset($_POST['update']))
    {
        $sql = "UPDATE appointments SET dateofbooking=:dateofbooking, timeofbooking=:timeofbooking where id=:id";
        $statement = $pdo->prepare($sql);
        $dateofbooking = $_POST['dateofbooking'];
        $timeofbooking = $_POST['timeofbooking'];

        $statement->bindParam(':dateofbooking',$dateofbooking, PDO::PARAM_STR);
        $statement->bindParam(':timeofbooking',$timeofbooking, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        $pdo = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Edit Your Appointment | Smadico </title>
        <link rel="shortcut icon" href ="Images/TransperentPNG .png"> 
        <link rel="stylesheet" href="CSS/Booking.css">

        <style>
            th,td{
                border-bottom: 1px solid #ddd;
                border-color: rgb(252, 215, 169);
                color: rgb(252, 215, 169); 
            }

            tr:hover{
                background-color: rgb(252, 215, 169);

            }
        </style>

    </head>
    
    <body style="background-color: black;">
        
        <!-- Header Code  -->
        <header>

            <nav>
                
                <a href="index.php">
                    <img class="LogoPhoto" src="Images/SmadicoLogo4.png" alt='Smadico Logo' style="width:250px;height:250px;">
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

        <div class="BookingTemplate">
            <br><br><br>
            <h1>Book a Appointment with our Dealer</h1> 

            <h3>
                Please Choose the suitable date for you to meet with one of our dealers. 
            </h3>

            <br><br>

            <form method="post" action="EditBooking.php">

                <label for="Booking"> Choose the date of your Appointment : </label>
                <input type="Date" class="dateofbooking" name="dateofbooking">
                <br><br>
                <label for="BookingTime"> Choose the time of your Appointment</label>
                <input type="time" class="timeofbooking" name="timeofbooking" >
                
                <input value="<?php
                    echo $id
                ?>" name="id" type="hidden">
                <br><br><br>
    
                <button type="submit" class="SubmitBooking"> Edit </button>
                
            </form>

            <br><br>
            <a href="ViewAllBooking.php"> View Appointments </a>

            <br><br><br><br>

        </div>

        <br><br><br>
        <h1 class="LocationH3"> Our Location </h1>
        <br>
        <div class="map">
            <div class="gmap_canvas">
                <iframe width="1000" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Amman,%20Jordan&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
                <br>
            </div>
        </div>

        <br><br><br><br><br>

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