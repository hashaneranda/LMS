<?php   include "../php/db.php";    ?>
<?php   include "./includes/header.php";    ?>

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
    <section class="login">
        <div class="container">
                <div class="loginBox">
                    <img src="./imgs/user2.png" id="login-img" alt="user">
                    <form action="../php/login2.php" method="post" >
                        <h3>Username</h3>
                        <div class="form-input">
                            <input type="text" name="username" placeholder="Enter username ">
                        </div>
                        <h3>Password</h3>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Enter password ">
                        </div>
                        <span id="logErr">
                            <?php if(isset($_GET['loginErr'])){
                            foreach($_GET as $loc=>$item)
                                $_GET[$loc] = base64_decode(urldecode($item));
                            echo   $_GET[$loc]; }?>
                        </span><br>
                        <button type="submit" name="login">Login</button>
                    </form>
                    <a href="forgot_password.php"> Forget Password ? </a><br><br>
                    <a href="register.php"> Don't have a account!<br> REGISTER NOW </a>
                </div>
            </div>
    </section>
    
    <?php   include "./includes/footer.php";    ?>