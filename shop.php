<?php /*add login */
  require_once('product.php');
  require_once('createdatabase.php');
  //create instance of database class
  $database = new createdatabase($dbname = "Productdb", $tablename = "Producttb");

?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--allows my website to also fit well on a smaller device!-->
    <title>Rae's Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link href="css/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">
    <!-- own fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="img/logo.jpg" alt="Personal Logo">
     </div>
     <button class="nav-toggle" aria-label="toggle navigation">
       <span class="hamburger"></span>
     </button>
     <nav class="nav">
       <ul class="nav__list">
         <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
         <li class="nav__item"><a href="#services" class="nav__link">My Services</a></li>
         <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
         <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
         <li class="nav__item"><a href="shop.php" class="nav__link">Shop Art</a></li>
       </ul>
      </nav>
    </header>

<div class="container">
  <div class="row text-center py-5">
    <?php
      $result = $database->getData();
      while ($row = mysqli_fetch_assoc($result)){
       product($row['product_name'], $row['product_price'], $row['product_image'], $row['product_desc']);
      }
    ?>
</div>

        <footer class="footer">
          <a href="mailto:rachel.oyoo1@gmail.com" class="footer-link">rachel.oyoo1@gmail.com</a>
          <ul class="social-list">
          <li class="social-list__item">
            <a class="social-list__link" href="https://github.com/raemx">
              <i class="fab fa-github-square"></i>
            </a>
          </li>
          <li class="social-list__item">
            <a class="social-list__link" href="https://www.linkedin.com/in/rachel-oyoo">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li class="social-list__item">
            <a class="social-list__link" href="https://www.instagram.com/creraete">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
        </footer>

        <script src="index.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
    </html>
