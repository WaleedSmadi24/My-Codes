<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> View Appointments | Smadico </title>
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

        <?php
            session_start();
            if(!isset($_SESSION['username']))
            {
                header("location:SignIn.php");
            }

            Require 'Connection.php';

            $sql="SELECT * FROM appointments where user_id=:id";
            $statement=$pdo->prepare($sql);
            $statement->bindParam(':id',$_SESSION['id'],PDO::PARAM_INT);
            $statement->execute();
            echo "<table style='border:1px solid; width:80%; text-align:center; margin:auto;'>";
            echo "<tr>";
            echo "<th> Date Of Booking </th>";
            echo "<th> Time Of Booking </th>";
            echo "<th> Edit </th>";
            echo "<th> Delete </th>";
            echo "</tr>";
            $data=$statement->fetchAll();
            foreach ($data as $row)
            {
                echo "<tr>".
                "<td> ". $row['dateofbooking'] . "</td>" 
                ."<td>" . $row['timeofbooking'] . "</td>".
                "<td>" ." <a href=ViewBooking.php?id=".$row['id']."> Edit </a>
                </td>".
                "<td> <a href=DeleteBooking.php?id=".$row['id']."> Delete </a> </td>".
                "</tr>";
            }
            echo "</table>";
            $pdo=null;

        ?>

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

