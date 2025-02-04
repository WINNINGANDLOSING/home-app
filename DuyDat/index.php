<?php
    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'ehome');
    $sql = "SELECT * FROM Houses";
    $featured = $con->query($sql); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title> Rent House </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <scrip scr="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <scrip scr="js/bootstrap.min.js"> </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Rent House</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>

      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="col-sm-2">
    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center"> Houses: </h2> <br><br>

            <?php
            while($house = mysqli_fetch_assoc($featured)):
            ?>

            <div class = "col-md-15">
                <h4> <?= $house['Title'];?> </h4>
                <img src="<?=$house['image'];?>" width= "750", height="500"; alt="<?= $house['Title'];?>"/>
                <p class="lprice">Price: <?=$house['Price'];?>  </p>
               xvxv
            </div>
            <?php endwhile; ?>

            </div>
        </div>
    </div> 
    

</body>
</html>