<?php
    Require "Connection.php";
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $sql = "INSERT INTO users(username,email,pass)
        VALUES(:username,:email,:pass)";
        $statement = $pdo->prepare($sql);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $statement->bindParam(":username",$username,PDO::PARAM_STR);
        $statement->bindParam(":email",$email,PDO::PARAM_STR);
        $statement->bindParam(":pass",$pass,PDO::PARAM_STR);

        $statement->execute();
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    
        <title>Sign Up Now | Smadico</title>
        <link rel="shortcut icon" href ="Images/TransperentPNG .png">
        <link rel="stylesheet" href="CSS/SignUp.css">

    </head>
    
    <body style="background-color:black;">

        <br><br><br>

        <div class="Grid">

            <div class="top">
                <div class="Logo">
                    <a href="index.php">
                        <img src="Images/SmadicoLogo4.png" alt='Smadico Logo' style="width:290px;height: 290px;">
                    </a>
                </div>
            </div>

            <div class="bottom">
                
                <form class="SignUpForm" action="" method="post">

                    <h3>Sign Up</h3>
                    <h4>Join Us Now</h4>

                    <label for="username"></label>
                    <input type='text' name='username' placeholder='Your Name' required>
                    <br>
                    <br>

                    <label for="gender select"></label>
                    <select id="gender select" name="gender">
                        <option value="M"> Male </option>
                        <option value="F"> Female </option>
                    </select>

                    <label for="DOB"></label>
                    <input type="date" id="DOB" name="DOB" placeholder="Choose Your Birth Date">
                    <br>
                    <br>
                    <label for="email"></label>
                    <input type='email' id='email' name='email' placeholder='Your Email' required>
                    <br>
                    <br>
                    <label for='pass'></label>
                    <input type='password' id='pass' name='pass' placeholder='Password' required>

                    <label for='repass'></label>
                    <input type='password' id='repass' name='repass' placeholder='Re-Enter Password' required>
                    <br>
                    <br>

                    <a href="SignIn.php">
                        <button class="SignUpButton" type="submit"> Sign Up </button>
                    </a>

                </form>

                <br><br>
                <a href="SignIn.php"> Sign In Now !! </a>

            </div>
        </div>
    </body>

</html>