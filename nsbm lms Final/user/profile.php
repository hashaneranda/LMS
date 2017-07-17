<?php   include "../php/db.php";    ?>
 <?php session_start(); ?>
 <?php
if(!isset($_SESSION['user_role'])){ header("Location: login.php");   }
    $username=$_SESSION['username'];
    if($_SESSION['user_role']=="admin"){   header ("Location: ../admin/dashboard.php");  }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../website/css/styles.css">
    <link rel="shortcut icon" href="../website/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="../website/css/animate.css">
    <link rel="stylesheet" href="../website/css/font-awesome.min.css">

    <title>Profile |LMS</title>
</head>
<body id="home">
    <div class="topNav">
        <div class="container">
            <ul class="topLogin">
                <li><a href="profile.php"><?php echo $username; ?></a></li>
                <li><a href="../php/logout.php">Log Out</a></li>
            </ul>
        </div>
    </div>
    <?php
    if(isset($_SESSION['username'])){
        $query="select * from users where username='{$username}'";
        $select_users=mysqli_query($connection,$query);
                        
                        while($row=mysqli_fetch_assoc($select_users)){
                            $fname=$row['user_fullname'];
                            $uname=$row['username'];
                            $uimage=$row['user_image'];
                            $mail=$row['user_email'];
                            $id=$row['user_id'];
                            $index=$row['Index_no'];
                            
                       
    
    ?>
    
    <div class="container profile">
        <h1>Profile</h1>
        <img src="<?php echo $uimage;   ?>" alt="image">
        <h2><?php   echo $fname;    ?></h2>
        <p>Username:  <?php   echo $uname;    ?> </p>
        <p>email:  <?php   echo $mail;    ?></p>
        <p>Index number:   <?php   echo $index;    ?></p>
        <form action="#" method="get"><button type="submit" name="edit">Edit Profile</button></form>
        
    
    </div>
    <?php 
        if(isset($_GET['edit'])){
            ?>
      
    <div class="editprofile">
        <form action="#" method="post" enctype="multipart/form-data">
           <input type="text" name="fname" placeholder="Full name">
           <input type="text" name="mail" placeholder="Email">
           Select profile Image:
           <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" name="submit" value="Edit profile">
        </form>
    </div>
    <?php   
        if(isset($_POST['submit'])){
            $f_name=$_POST['fname'];
            $email=$_POST['mail'];
            $f=$uimage;
            $target_dir = "./uploads/";
            $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                $f=$target_file;
                echo $f;
            }
            $query="update users set user_fullname='{$f_name}',user_email='{$email}',user_image='{$f}' where user_id='{$id}'";
                        
                        $update_post=mysqli_query($connection,$query);
                        if(!$update_post){
                            die('QUERY FAILED'.mysqli_error($connection));
                        }
        }
              }
    ?>



<?php
                             }
    }
    ?>
    <div class="container none"></div>




<?php  include "../website/includes/footer.php";    ?>