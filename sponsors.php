<?php
session_start();
if(isset($_SESSION['customer_id'])){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/yourNameStyles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <title>!</title>
  </head>
  <body>
      <!-- ----------------------Navbar-------------------------- -->
      <?php include"header.php";?>
      <!-- -----------------------End of Nav--------------------------- -->
      <!-- --------------Main--------------------- -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href=""></a><img src="img/daycare.png" class="d-block w-100 img-body" alt="..." height="550" width="1200">
                
            </div>
            <div class="carousel-item">
                <img src="img/sponsor.jpg" class="d-block w-100 img-body" alt="..." height="550" width="1200">
                
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container my-4">
      <p class="h2 text-center">Sponsors</p>
    <div class="row">
        <div class="col-lg-4 col-12 p-1">
        <div class="card mb-4 shadow-sm">
                   <a href="https://www.microsoft.com/en-in" target="_blank"> <img src="img/1.png" alt="" width="100%" height="300" preserveAspectRatio="xMidYMid slice"></a>
                    
                </div>
        </div>
        <div class="col-lg-4 col-12 p-2">
        <div class="card mb-4 shadow-sm bg-dark">
                   <a href="https://www8.hp.com/in/en/home.html" target="_blank"><img src="img/2.png" alt="" width="100%" height="300" preserveAspectRatio="xMidYMid slice"></a> 
                    
                </div>
        </div>
        <div class="col-lg-4 col-12 p-2">
        <div class="card mb-4 shadow-sm">
                    <a href="https://www.skype.com/en/" target="_blank"><img src="img/3.png" alt="" width="100%" height="300" preserveAspectRatio="xMidYMid slice"></a> 
                    
                </div>
        </div>
    </div>

    </div>
          <div class="container-fluid my-4">
            <a href="https://www.zomato.com" class="text-decoration-none"> <p class="h2 text-dark text-center text-decoration-none"> Discover the best food for your child</p></a>
              <video class="card py-2  col-lg-12 col-12" controls loop autoplay muted>
                <source src="movie.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
          </div>



      </div>
      <!-- ----------------------------End of main----------------- -->
      <!-- ---------------footer------------------- -->
      <footer class="bd-footer p-3 p-md-5 mt-5 bg-dark text-center text-sm-start">
        <div class="container text-center text-light">
          <p class="mb-0">Last Modified on 16/12/2020</p>
          <p class="mb-0">Designed and built with all the love in the world by Webmaster Alexandar</p>
          <p class="mb-0">Contact 24/7 📞 1234567890</p>
        </div>
      </footer>
      <!-- -----------------End of footer------------------ -->
      <script src="js/yourNameJavaScript.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
else{
  ?>
    <script>
    location.replace('index.php');
    </script>
    <?php
}
?>