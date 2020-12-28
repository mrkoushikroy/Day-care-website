<?php
    session_start();


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
    <title>Signup:7SwordsMenOfficial</title>
  </head>
  <body>
  <?php 

  include "header.php";
  include "connector.php";

  if(isset($_POST['submit'])){
      $name =mysqli_real_escape_string($conn, $_POST['name']);
      $fname =mysqli_real_escape_string($conn, $_POST['email']);
      $mobile =mysqli_real_escape_string($conn, $_POST['mobile']);
      $password =mysqli_real_escape_string($conn, $_POST['password']);
      $columns =mysqli_real_escape_string($conn, $_POST['columns']);
     
      
      if(empty($name) && empty($email) && empty($mobile) && empty($password) && empty($columns)){
        ?>
        <div class="alert alert-danger text-align-center" role="alert">
            Please enter all field !!</div>
        <?php 

      }
      else{

      $pass = password_hash($password, PASSWORD_BCRYPT);

      $emailquery = "select * from carers where customer_id = '$mobile'";
      $query = mysqli_query($conn, $emailquery);

      $emailcount = mysqli_num_rows($query);
      if($emailcount>0)
        {
            ?>
                    <div class="alert alert-danger text-align-center" role="alert">
                        Custmer Id already registered !!</div>
                    <?php
        }
      else
        {
            

                $insertquery = "insert into carers(given_name, family_name, customer_id, pin, columns) values('$name','$fname','$mobile','$pass','$columns')";

                $iquery = mysqli_query($conn, $insertquery);

                if($iquery){
                    ?>
<script>
    location.replace("index.php");

    </script>
                    <?php
                }
                else{
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Data can't be inserted !!</div>
                    <?php
                    
                }

        }
    }

  }

?>
    <div class="container py-4 anim">

    <img class="rounded-circle d-flex m-auto" src="img/logo.png" alt="" width="72" height="72">

                        <h1 class="h3 mb-3 my-3 font-weight-normal text-center">Get an Day Care account</h1>
    <form class="d-flex flex-column form-signin" name="formRegister" onsubmit="return validateform();" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-signin">
                        <div class="form-group>
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"required>
                        </div>
                        <div class="form-group">
                            <label for="Email">Family Name</label>
                            <input type="text" class="form-control" id="email"
                            name="email"required>
                        </div>

                        <div class="form-signin form-group>
                            <label for="phone">Customer Id</label>
                            <input type="number" class="form-control" id="mobile" name="mobile" maxlength="10" required>
                            <small class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Pin</label>
                            <input type="password" class="form-control" name="password" maxlength="4" id="password">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="cexampleInputPassword">Columns</label>
                            <input type="text" class="form-control" name="columns" id="columns" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
                    </form>

                    
    </div><br><br>

<?php include"footer.php";?>
<script>
    function validateform() {
            if (document.formRegister.mobile.value.length < 10 || document.formRegister.mobile.value.length > 10 ) {
                setErrorMsg(mobile, 'Customer Id must be 10 Numbers');
                document.formRegister.mobile.focus();
                return false;
            }
            else if (document.formRegister.password.value.length < 4) {
                setErrorMsg(password, 'Pin must 4 numbers');
                document.formRegister.password.focus();
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