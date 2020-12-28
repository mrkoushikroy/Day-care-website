<?php
session_start();
require_once"connector.php";
if(isset($_SESSION['customer_id'])){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/yourNameStyles.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Day Care</title>
  </head>
  <body>
  
<?php include"header.php";?>

<div class="container container-flex">

<?php
   $cus=$_SESSION['customer_id'];
    $selectquery= "select * from child where customer_id='$cus'";
     $query = mysqli_query($conn, $selectquery);
     $result =mysqli_fetch_assoc($query);
     if($result){
     ?>

<div class="container">
<br><img class="rounded-circle d-flex m-auto" src="img/logo.png" alt="" width="72" height="72">
    <div class="container container-flex ">
    <h1 class="h3 mb-3 my-3 font-weight-normal text-center ">Hey <?php echo $_SESSION['given_name'] ; ?> !!</h1>
    <h1 class="h3 mb-3 my-3 font-weight-normal text-center ">Details of your children</h1>
</div>

    <form class="d-flex flex-column form-signin" action="" method="post">
        
    <label for="name">Family Name</label>
        <input type="text" class="form-control" id="id" name="id" value="<?php echo $result['family_name'];?>" disabled>

        <div class="form-signin form-group mt-2">
            <label for="name">Date of Birth</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $result['date_of_birth'];?>" disabled>
        </div>
        

        <div class="form-signin form-group>
            <label for="phone"> Customer Id</label>
            <input type="phone" class="form-control " id="mobile" name="mobile" value="<?php echo $result['customer_id'];?>" disabled>
             
        </div>
        <div class="form-group">
            <label for="Email">Daily Message</label>
            <textarea type="email" class="form-control mb-5" id="email" name="email" disabled><?php echo $result['daily_message'];?></textarea>
        </div>

        
</form>
<?php
     }
     else{
        ?>
        <div class="alert alert-danger" role="alert">
            No details found !!</div>

        <?php

     }
     ?>
</div>

</div>
<?php include"footer.php";?>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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