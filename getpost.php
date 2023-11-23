
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item"
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST["email"];
    $dicr = $_POST["dicr"];
    $gamename = $_POST["gamename"];
    $rank = $_POST["rank"];

      // echo "<br>";
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "aman23";

      $conn  = mysqli_connect($servername, $username, $password, $dbname);
      echo "<br>";
     
       
        $sql = "INSERT INTO `game` (`gamename`, `rank`, `dicr`, `email`) VALUES ('$gamename', '$rank', '$dicr', '$email');";
        $result = mysqli_query($conn, $sql);

        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sucess!</strong> Your Email ' . $email .' and ' .$password .' has been submitted  .
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        else{
            echo "db is not created sucessfully! check the error and try again ". mysqli_error($conn);
        }

      }

    
?>
    <h1>Hello, world!</h1>
    <div class="container">
        <h1 >This is example of post and get</h1>
    <form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="Discription" class="form-label">gamename</label>
    <input type="text" name="gamename" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="Discription" class="form-label">Rank</label>
    <input type="number" name="rank" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="Discription" class="form-label">Discription</label>
    <input type="text" name="dicr" class="form-control" id="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>ਵਕਰਪਨਰਪ