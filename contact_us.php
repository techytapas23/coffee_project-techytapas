<?php
    include('database.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Contact Us</title>

    <style> 
        h1{
    text-align: center;
    color: red;
    text-transform: White;
    text-decoration: underline;
}


.menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));

}

.menu .box-container .box{
    padding: 1rem;
    text-align: center;
    background-color: White;
    
}


.menu .box-container .box h3{
    color: black;
    font-size: 2rem;
    padding: 1rem ;
}

.menu .box-container  .photo img{
    width: 30px;
}


.youtube .yt .techytapas{
    color:red;
    width: 50rem;
    font-size:2rem
}

.youtube .yt .techytapas img{
    width: 90px;
}

    </style>

</head>
<body>
<section class="menu" id="menu">

<h1>Our Co-Founders</h1>

<div class="box-container">

    <div class="box">
        <img src="tapas new.png" alt=""  height="280px">
        <h3>Mr.Tapas Kumar Nayak</h3>
        <div class="photo">
        <a href="http://instagram.com/techytapas"> <img src="instagram.png" alt="">Instagram</a>
        </div>
        <div class="email">Email:-info.tapasnayak@gmail.com</div>
    </div>
    

    <div class="box">
        <img src="chinu.png" alt="" height="280px">
        <h3> Mr.Chinmaya Kumar Sahu</h3>
        <div class="photo">
        <a href="#"> <img src="instagram.png" alt="">Instagram</a>
        </div>
        <div class="email">Email:-chimayasahoo@gmail.com</div>
    </div>

    <div class="box">
        <img src="ashu.png" alt="" height="280px">
        <h3>Mr.Ashutosh Mohapatra</h3>
        <div class="photo">
        <a href="http://instagram.com/mr_ashu945"> <img src="instagram.png" alt="">Instagram</a>
        </div>
        <div class="email">Email:-mohapatraashutosh493@gmail.com</div>
    </div>

    <div class="box">
        <img src="bablu.png" alt="" height="280px">
        <h3>Mr.Jayadratha Nayak</h3>
        <div class="photo">
        <a href="http://instagram.com/_dear._.comrade__2.0"> <img src="instagram.png" alt="">Instagram</a>
        </div>
        <div class="email">Email:-myselfbablu123@gmail.com</div>
    </div>

    </section>
      <br><br><br><br><br><br><br>
    <section class="youtube">
    <center class="yt">
    <p class="techytapas">
        Please Subscribe to our Youtube Channel:- <a href="https://youtube.com/TechyTapas"> <img src="youtube logo.png" alt="">YouTube</a>
</p>
    </center>
    </section>
</body>
</html>