
    <?php
    session_start();

    include("database.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $num = $_POST['number'];
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];



        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "insert into form (name,cnum,email,pass) values('$name', '$num', '$gmail', '$password')";

            mysqli_query($con, $query);

            echo "<script type= 'text/javascript'> alert('Successfully Register')</script>";

        }
        else{
            echo "<script type='text/javascript'> alert ('Please Enter some Valid Information')</script>";
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
    <div class="signup">
        <h1>Welcome To <br> MCA Coffee Wala</h1>
        <form method ="POST">
            <label> Name:-</label>
            <input type="text" name="name" required placeholder="Enter Your name here">
            <label> Number:-</label>
            <input type="number" name="number" required placeholder="Enter Your Number here">
            <label> Email:-</label>
            <input type="email" name="mail" required placeholder="Enter Your Email here">
            <label> Password:-</label>
            <input type="password" name="pass" required placeholder="Enter Your passwsord here">
            <input class="submit" type="submit" name="" value="Submit">
        </form>
        <p> Already have an Account? <a href="NEW LOGIN.php">Login Here</a> </p>
    </div>
</body>
</html>