<?php include "connection.php";?>

<!doctype html>
<html lang="en">
  <head>
    <title>Experiences</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="styles/exp.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="mx-auto">
            <span class="align-middle">
            <div class="collapse navbar-collapse align-middle" id="navbarNav">
            <ul class="navbar-nav ">
                <!-- <li class="nav-item active">
                    <img src="img/log.png">
                </li> -->
                <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.php">About me</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="exp.php">Experiences</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="proj.php">Projects</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact me</a>
                </li>
            </ul>
            </div>
        </span>
        </div>
      </nav>

      <div class="container">
        <div class="boxkecil">
        <h3>Here are my experiences!<br>
        <small class="text-muted">Experiences are everything arent they?</small>
        </h3>

        <table class="exp">
              <th>Company</th>
              <th>Year</th>
              <th>Position</th>
                <?php 
                  $sql = "SELECT pos,yr,com from exp";
                  $result=$db->query($sql);

                  if($result->num_rows>0){
                    while($row =$result-> fetch_assoc()){
                      echo "<tr><td>".$row["com"]."</td><td> ".$row["yr"]."</td><td> ".$row["pos"]."</td></tr>";
                    }
                    echo"</Table>";
                  }

                ?>
            </table>
            <h3 id="foot"><small class="text-muted" >And more to come!</small></h3>
            </div>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>