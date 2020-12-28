<?php
session_start();
if(!isset($_SESSION['customer_id'])){
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

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please Login!</strong> to access all tabs
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php

    include "connector.php";
    if(isset($_POST['submit'])){

        $email =$_POST['email'];
        $password =$_POST['password'];

        if(empty($email) || empty($password)){
            ?>
                    <div class="alert alert-danger" role="alert">
                        Enter all the fields !!</div>
                    <?php
         }
        else{
        $email_search = "select * from carers where customer_id='$email'";
        $query = mysqli_query($conn, $email_search);
        $email_count=mysqli_num_rows($query);
        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass=$email_pass['pin'];

            $_SESSION['given_name']=$email_pass['given_name'];
            $_SESSION['customer_id']=$email_pass['customer_id'];
            

            $pass_decode = password_verify($password, $db_pass);
            if($pass_decode){
                ?>
                <script>
                     location.replace("process.php");

                     </script>
                 <?php
            }
            else{
                ?>
                    <div class="alert alert-danger" role="alert">
                        Password not matched !!</div>
                    <?php
            }
        }

            else{
                ?>
                    <div class="alert alert-danger" role="alert">
                        No details found !!</div>

                    <?php
            }
        }

    }
 
    
    ?>

    <div class="container py-4">
    <form class="d-flex flex-column" name="loginForm" onsubmit="return validatelogin();" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post">
                        <div class="form-signin anim">
                        <img class="rounded-circle d-flex m-auto" src="img/logo.png" alt="" width="72" height="72">

                        <h1 class="h3 mb-3 my-3 font-weight-normal text-center">Please Login to Day Care</h1>
                            <label for="exampleInputEmail1">Customer Id</label>
                            <input type="text" class="form-control" name="email" id="email" maxlength="10" required>
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pin</label>
                            <input type="password" class="form-control" name="password" id="password" maxlength="4" required>
                            <small class="text-danger"></small>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form
    </div>
    </div><br><br><br><br><br>

<?php include"footer.php";?>

<script>
    function validatelogin() {
            if (document.loginForm.email.value.length < 10) {
                setErrorMsg(email, 'Customer Id can not be less than 10 Numbers');
                document.loginForm.email.focus();
                return false;
            }
            
            else if (document.loginForm.password.value.length < 4) {
                setErrorMsg(password, 'Pin can not be less than 4 character');
                document.loginForm.password.focus();
                return false;
            }
            else{
                return true;
            }
        }
        
            function setErrorMsg(input, errormsg){
            const formControl = input.parentElement;
            const small = formControl.querySelector('small')
            formControl.className = "is-invalid"
            small.innerText = errormsg;
        }

</script>
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
    location.replace('process.php');
    </script>
    <?php
}
?>