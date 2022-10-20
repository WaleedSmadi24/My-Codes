<?php
    session_start();
    Require("Connection.php");

    /*if(isset($_SESSION['username']))
    {
        header("location:index.php");
    }*/

    if(isset($_POST['SignIn']))
    {
        $sql="SELECT * from users where username=:username and pass=:pass";
        $statement=$pdo->prepare($sql);
        $username=$_POST['username'];
        $pass=$_POST['pass'];

        $statement->bindParam(":username",$username,PDO::PARAM_STR);
        $statement->bindParam(":pass",$pass,PDO::PARAM_STR);
        $statement->execute();
        
        $row = $statement->fetch();

        $count=$statement->rowCount();
        if($count==1)
        {
            $_SESSION['username']=$username;
            $_SESSION['id']=$row['id'];
            header("location:index.php");
        }
        else
        {
            echo "<h3 style='color:Red'> Invalid Username or Password, Try Again </h3>";
        }

        $pdo=null;

    }

?>    

<!DOCTYPE html>
<html lang="en">
    <head>
    
        <title>Sign In | Smadico</title>
        <link rel="shortcut icon" href ="Images/TransperentPNG .png">
        <link rel="stylesheet" href="CSS/SignIn.css">
    </head>

    <body style="background-color: black;">
        
        <div class="Grid">

            <div class="SignFormGrid">
            
                <form class="SignInForm" method="post">
                    
                    <h2> Sign In </h2>
                    <br>
                    <input type='text' class="uname" id='uname' name='username' placeholder=" Enter Your Username " required>
                    <label class="unamelabel"for='username'></label>
                    <br>
                    <br>
                    <input type='password' class="pass" id='pass' name='pass' placeholder=" Enter Your Password " required>
                    <label class="passlabel" for='pass'></label>
                    <br>
                    <br>
                    <input type="checkbox" id="Remember Me" name="Remember Me">
                    <label class="SignUpButton" for="Remember Me"> Remember Me </label>
                    <br>
                    <br>
                    <a href="index.php">
                        <button type="submit" class="SignInButton" name="SignIn"> Sign In </button>
                    </a>
                    
                    <br>
                    <br>
            
                    <h4>If you don't have an account</h4>
                    <br>
                    <a href="SignUp.php">
                        Sign Up Now
                    </a>
        
                </form>

            </div>
            
            <div class="PhotoGrid">
                <a href="index.php">
                    <img class="LogoPhoto" src="Images/SmadicoLogo4.png" alt='Smadico Logo' style="width:300px;height:300px;">
                </a>
            </div>
            
        </div>


    </body>

</html>