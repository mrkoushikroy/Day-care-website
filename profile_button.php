<?php
require_once("connector.php");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="dropdown nav-item">
    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-user-circle" aria-hidden="true"></i>

            <?php
        if(isset($_SESSION['customer_id'])){
            echo "Welcome ";
        echo $_SESSION['given_name'];} ?>
    </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item bg-danger" href="logout.php">Logout</a>
        </div>
    </div>