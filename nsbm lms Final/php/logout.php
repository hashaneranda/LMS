<?php session_start(); ?>


<?php
                $_SESSION['username']=null;
                $_SESSION['fullname']=null;
                $_SESSION['user_role']=null;

    header("Location: ../website/index.php");

?>
