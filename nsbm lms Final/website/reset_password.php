<?php   include "../php/db.php";    ?>
<?php   include "./includes/header.php";    ?>
<?php   if(!isset($_SESSION['resetpass'])){ header("Location: forgot_password.php");   } 
        $show="";
?>

<body id="home">
    <nav id="loginNav">
        <div class="container">
            <div class="header">
                <img src="./imgs/nsbm-green-uni-logo.png" alt="nsbm logo">
            </div>

            <label for="show-menu" class="show-menu"><img src="menu.png" style="width:100%" alt="-"></label>
            <input type="checkbox" id="show-menu" role="button">


            <ul class="navbar" id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#courses">Courses</a>
                    <ul class="hiddenNav">
                        <li><a href="SOC.php">School of Computing</a></li>
                        <li><a href="SOB.php">School of Business</a></li>
                        <li><a href="home.html#courses">School of Engineering</a></li>
                    </ul>
                </li>
                <li><a href="index.php#events">Events</a></li>
                <li><a href="index.php#about">About NSBM</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="forgotpass">
        <div class="container reset">
            <div class="code <?php echo $show; ?>">
                <h2>Password Reset Email Sent</h2>
                <h1>Enter code that you recieved from inbox</h1>
                <form action="#" method="post">
                    <input type="text" name="code" placeholder="Enter code here">
                    <input type="submit" name="resetpass" value="Reset password">
                </form>
            </div>

            <?php 
        if(isset($_POST['resetpass'])){
            $code=$_POST['code'];
            if($_SESSION['resetpass']==$code){
                ?>
                <form action="#" method="post">
                    <input type="password" name="pass1" placeholder="New Password">
                    <input type="password" name="pass2" placeholder="Confirm Password">
                    <input type="submit" name="done" value="Change password">
                </form>
                <?php
            }
            
            
        }
            if(isset($_POST['done'])){
                $pass1=$_POST['pass1'];
                $pass2=$_POST['pass2'];
                $user_id=$_SESSION['resetid'];
                
                if($pass1 == $pass2){
                    $query="update users set password='{$pass1}' where user_id='{$user_id}'";
                        
                        $update_post=mysqli_query($connection,$query);
                        if(!$update_post){
                            die('QUERY FAILED'.mysqli_error($connection));
                        }
                }
                else{
                   $err="Password doesn't match"; 
                }
                echo "<h4 style='text-align:center'>{$err}</h4>";
            }
       ?>
       
        </div>
    </section>
    <div class="container" style="padding:40px;">
    
</div>

        <?php   include "./includes/footer.php";    ?>

