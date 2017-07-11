<?php   include "../php/db.php";    ?>
<?php   include "./includes/header.php";    ?>


<body>
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
        <div class="container sendMail">
            <h1>Recover Account</h1>
            <form action="#" method="post">
                <input type="text" name="uname" placeholder="Username">
                <input type="email" name="mail" placeholder="Email">
                <input type="submit" name="send" value="Send recovery email">
            </form>
        </div>
    </section>

    <?php
        if(isset($_POST['send'])){
            $uname=$_POST['uname'];
            $mail=$_POST['mail'];
            
            $query="select * from users where username='{$uname}' and user_email='{$mail}' and role='student'";
            $select_thatuser=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($select_thatuser)){
                echo"hello";
                $uid=$row['user_id'];
                $p=$row['password'];
                $_SESSION['resetpass']=$p;
                $_SESSION['resetid']=$uid;
                $email=$row["user_email"];
                        $body="{$uid},
                        Your reset code is = {$p}.
                                
                                    ";
                        $headers = "From: lmsbeta50@gmail.com". "\r\n"."CC: ";

                        mail($email,$e_name,$body,$headers);
                header("Location: reset_password.php");
            }
        }
    ?>
<div class="container" style="padding:70px;">
    
</div>

        <?php   include "./includes/footer.php";    ?>
