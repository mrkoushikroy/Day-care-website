
      <!-- ----------------------Navbar-------------------------- -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="anim">
                    <a href="/">
                    <img class="rounded-circle ml-4 border border-dark anim" width="60" height="60" src="img/logo.png" alt=""></a>
                </div>
          <a class="navbar-brand col-lg-5 col-md-2 col-sm-2 col-3" href="/">Day Care</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-end mr-5">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home </span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="sponsors.php">Sponsors</a>
              </li>
              
            </ul>
            <div>
                <ul class="navbar-nav mr-auto float-right">
                    
                    <li class="nav-item">
                        <?php
                        if(!isset($_SESSION['customer_id'])){
                            include "login_btn.php";
                            include "signup_btn.php";

                        }
                         ?>


                    <li class="nav-item">
                    <?php
                        if(isset($_SESSION['customer_id'])){
                              include "profile_button.php";
                        }
                         ?>
                        </li>
  
                </ul>
            </div>
          </div>
        </nav>
      <!-- -----------------------End of Nav--------------------------- -->