
   <body id="home">
    <div class="topNav">
        <div class="container">
            <ul class="topLogin">
              <?php
               if(isset($_SESSION['username'])){
                   echo "<li><a href='../user/profile.php'>{$_SESSION['username']}</a></li>";
                   echo "<li><a href='../php/logout.php'>Log Out</a></li>";
               }else{
                   echo "<li><a href='login.php'>Login</a></li>";
                   echo "<li><a href='register.php'>Register</a></li>";
               }
               
               ?>
            </ul>
        </div>
    </div>

    <nav>
        <div class="container">
            <div class="header">
                <img src="./imgs/nsbm-green-uni-logo.png" alt="nsbm logo">
            </div>

            <label for="show-menu" class="show-menu"><img src="menu.png" style="width:100%" alt="-"></label>
            <input type="checkbox" id="show-menu" role="button">


            <ul class="navbar" id="menu">
                <li><a href="#home" class="current">Home</a></li>
                <li><a href="#courses">Courses</a>
                    <ul class="hiddenNav">
                        <li><a href="SOC.php">School of Computing</a></li>
                        <li><a href="SOB.php">School of Business</a></li>
                        <li><a href="SOE.html">School of Engineering</a></li>
                    </ul>
                </li>
                <li><a href="#events">Events</a></li>
                <li><a href="#about">About NSBM</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>