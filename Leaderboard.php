<?php
$con=mysqli_connect("localhost","root","","Webstacks");
$result=mysqli_query($con,"select * from Leaderboard order by Points")
or die("Failed to query database.mysql_error()");
$i=0;

$arr = array(array());
      while($row=mysqli_fetch_array($result))
      {
        $name=$row[0];
        $points=$row[1];
        $likes=$row[2];
          for($j=0;$j<3;$j++)
          {
            if($j==0)
            $arr[$i][$j]=$name;
            if($j==1)
            $arr[$i][$j]=$points;
           if($j==2)
            $arr[$i][$j]=$likes;
        }
          $i++;
        }
      
?>


<!doctype html>
<html>
<head>
	<title> Leaderboard </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(1_ZhuqSg8Jmz4p8H6X5U1uzQ.png);
    background-position: center;
    background-repeat:repeat;
    height:100%;
    background-size: cover;
    background-attachment: fixed;">

<nav class="navbar sticky-top navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="http://localhost/The%20final/WebstacksLoggedIn.php" style="font-size: 30px;">
    <img src="download.png" width="74" height="42" class="d-inline-block align-top" alt="Logo">
    Webstacks(Logged In)
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/The%20final/WebstacksLoggedIn.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/The%20final/Log_in.php">Log Out</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/The%20final/Leaderboard.php">Leaderboard</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <br>
    <br>
    <br>

<div class="container" style="border-width: 2px;border-color: black;">
  <div class="row" style="height: 500px">
    <div style="width: 32.33%;border: 3px solid black;height: 500px; border-radius: 5px;background-image: url(0000551_solid-hot-pink.png);position:relative; bottom 20px ">

<br>
    <br>
    <br>
    <br>
     <br>
    <br>
    <br>
     <br>
     <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    echo "<p style='font-size:46px; line-height:70% '> <b> Rank:2 </b> </p>";
    echo "<p style='font-size:36px; line-height:70% '> Name:".$arr[8][0]."</p>";
    echo "<p style='font-size:36px; line-height:70% '> Points:".$arr[8][1]."</p>";
    echo "<p style='font-size:30px; line-height:70% '> Likes:".$arr[8][2]."</p>";
    ?>

    </div>
    &nbsp;
    <div style="width: 33.33%;border: 3px solid black;height: 500px; border-radius: 5px;background-color: white;">
   <br>
   <br>
     <br>
    <br>
    <br>
    <br>
    <br>
     <br>
      <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    echo "<p style='font-size:46px; line-height:70% '> <b> Rank:1 </b> </p>";
    echo "<p style='font-size:36px; line-height:70% '> Name:".$arr[9][0]."</p>";
    echo "<p style='font-size:36px; line-height:70% '> Points:".$arr[9][1]."</p>";
    echo "<p style='font-size:30px; line-height:70% '> Likes:".$arr[9][2]."</p>";
    ?>

    </div>
    &nbsp;
    <div style="width: 32.33%;border: 3px solid black;height: 500px; border-radius: 5px; background-image: url(2560x1440-light-salmon-pink-solid-color-background.jpg);">
  <br>
    <br>
    <br> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    echo "<p style='font-size:46px; line-height:70% '> <b> Rank:3 </b> </p>";
    echo "<p style='font-size:36px; line-height:70% '> Name:".$arr[7][0]."</p>";
    echo "<p style='font-size:36px; line-height:70% '> Points:".$arr[7][1]."</p>";
    echo "<p style='font-size:30px; line-height:70% '> Likes:".$arr[7][2]."</p>";
    ?>

    </div>
  </div>
</div>

<br>

<div class="container" style="border-width: 2px;border-color: black;">
  <div class="row">
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <div style="width: 30%;border: 3px solid black;height: 350px; border-radius: 5px; background-image: url(2560x1440-light-salmon-pink-solid-color-background.jpg););">
      
    <br>
    <br>
    <br>
     <br>
    <br>
    <br>
    <br>
    
    <?php
    echo "<p style='font-size:46px; line-height:70% '> <b> Rank:5 </b> </p>";
    echo "<p style='font-size:36px; line-height:70% '> Name:".$arr[5][0]."</p>";
    echo "<p style='font-size:36px; line-height:70% '> Points:".$arr[5][1]."</p>";
    echo "<p style='font-size:30px; line-height:70% '> Likes:".$arr[5][2]."</p>";
    ?>

    </div>
    &nbsp;
    <div style="width: 30%;border: 3px solid black;height: 350px; border-radius: 5px; background-image: url(pink_solid_color_light_bright_65838_1920x1080.jpg);">

   <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    echo "<p style='font-size:46px; line-height:70% '> <b> Rank:4 </b> </p>";
    echo "<p style='font-size:36px; line-height:70% '> Name:".$arr[6][0]."</p>";
    echo "<p style='font-size:36px; line-height:70% '> Points:".$arr[6][1]."</p>";
    echo "<p style='font-size:30px; line-height:70% '> Likes:".$arr[6][2]."</p>";
    ?>

    </div>
    &nbsp;
    <div style="width: 30%;border: 3px solid black;height: 350px; border-radius: 5px; background-image: url(BD_156_SOL_1024x1024.jpg);">
      
    <br>
    <br>
    <br>
     <br>
    <br>
    <br>
    <br>
    <?php
    echo "<p style='font-size:46px; line-height:70% '> <b> Rank:6 </b> </p>";
    echo "<p style='font-size:36px; line-height:70% '> Name:".$arr[4][0]."</p>";
    echo "<p style='font-size:36px; line-height:70% '> Points:".$arr[4][1]."</p>";
    echo "<p style='font-size:30px; line-height:70% '> Likes:".$arr[4][2]."</p>";
    ?>

    </div>
    &nbsp;
  </div>
</div>
<br>
<div class="container" style="border-width: 2px;border-color: black;">
  <div class="row">
    <div style="width: 24%;border: 3px solid black;height: 250px; border-radius: 5px;background-image: url(BD_156_SOL_1024x1024.jpg);">
     
    <br>
    <br>
    <br>
    <br>

        <?php
            echo "<p style='font-size:36px; line-height:70% '> <b> Rank:7 </b> </p>";
    echo "<p style='font-size:26px; line-height:70% '> Name:".$arr[3][0]."</p>";
    echo "<p style='font-size:26px; line-height:70% '> Points:".$arr[3][1]."</p>";
    echo "<p style='font-size:20px; line-height:70% '> Likes:".$arr[3][2]."</p>";
    ?>

    </div>
    &nbsp;
    <div style="width: 24%;border: 3px solid black;height: 250px; border-radius: 5px; background-image: url(2560x1440-light-salmon-pink-solid-color-background.jpg);">
      
    <br>
    <br>
    <br>
     <br>

    <?php
        echo "<p style='font-size:36px; line-height:70% '> <b> Rank:8 </b> </p>";
    echo "<p style='font-size:26px; line-height:70% '> Name:".$arr[2][0]."</p>";
    echo "<p style='font-size:26px; line-height:70% '> Points:".$arr[2][1]."</p>";
    echo "<p style='font-size:20px; line-height:70% '> Likes:".$arr[2][2]."</p>";
    ?>

    </div>
    &nbsp;
    <div style="width: 24%;border: 3px solid black;height: 250px; border-radius: 5px;background-image: url(0000551_solid-hot-pink.png)">
      
    <br>
    <br>
    <br>
    <br>

    <?php
        echo "<p style='font-size:36px; line-height:70% '> <b> Rank:9 </b> </p>";
    echo "<p style='font-size:26px; line-height:70% '> Name:".$arr[1][0]."</p>";
    echo "<p style='font-size:26px; line-height:70% '> Points:".$arr[1][1]."</p>";
    echo "<p style='font-size:20px; line-height:70% '> Likes:".$arr[1][2]."</p>";
    ?>

    </div>
    &nbsp;
    <div style="width: 24%;border: 3px solid black;height: 250px; border-radius: 5px;background-image:  url(pink_solid_color_light_bright_65838_1920x1080.jpg);">
      
    <br>
    <br>
    <br>
     <br>
    <?php
        echo "<p style='font-size:36px; line-height:70% '> <b> Rank:10 </b> </p>";
    echo "<p style='font-size:26px; line-height:70% '> Name:".$arr[0][0]."</p>";
    echo "<p style='font-size:26px; line-height:70% '> Points:".$arr[0][1]."</p>";
    echo "<p style='font-size:20px; line-height:70% '> Likes:".$arr[0][2]."</p>";
    ?>

    </div>
    <br>
<br>
<br>
<br>
  </div>
  
<br>
<br>
<br>
<br>
</div>
</body>
</html>