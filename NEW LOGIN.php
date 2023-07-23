<?php
    session_start();

    include("database.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from form where email = '$gmail' limit 1";
            $result = mysqli_query($con, $query);
            

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location:menu.php");
                        die;

                    }
                
               
                }
            }
            echo "<script type= 'text/javascript'> alert('wrong username or password')</script>";

        }
        else{
            echo "<script type= 'text/javascript'> alert('wrong username or password')</script>";

        }

    }


    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="signup style.css">
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form method="POST">
            <label> Email:-</label>
            <input type="email" name="mail" required placeholder="Enter Your Email here">
            <label> Password:-</label>
            <input type="password" name="pass" required placeholder="Enter Your passwsord here">
            <input class="submit" type="submit" name="" value="Submit">
        </form>
        <p> Not have an Account? <a href="NEW SIGNUP.php">SignUp Here</a> </p>
    </div>
</body>
</html>