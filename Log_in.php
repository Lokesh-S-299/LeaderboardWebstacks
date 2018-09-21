
<!doctype html>
<html>
<head>
	<title> Webstacks-Log In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar sticky-top navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="http://localhost/The%20final/Webstacks.php" style="font-size: 30px;">
    <img src="download.png" width="74" height="42" class="d-inline-block align-top" alt="Logo">
    Webstacks
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/The%20final/Webstacks.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="http://localhost/The%20final/Log_in.php">Log In</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Leaderboard</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div style="background-image: url(web_application_design.jpg); background-position: center;
    background-repeat: no-repeat;
    height:100%;
    background-size: cover;">
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
<br>

<div class="container">
  <form action="process.php" method="POST">
  <div class="row align-items-center">
    <div class="col">


        <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input class="form-control form-control-lg" type="email" class="form-control" id="inputEmail3" name="Email" placeholder="Email">
        </div>
        </div>

        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input class="form-control form-control-lg" type="password" class="form-control" id="inputPassword3" name="Password" placeholder="Password">
        </div>
        </div>

    </div>
  </div>
  <button type="submit" class="btn btn-primary id="log_in_btn" name="Log_in ">Submit</button>
  </form>
  </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
</body>
</html>