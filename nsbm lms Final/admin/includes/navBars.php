    
       <body>
        <div class="topNav">
            <div class="container">
                
                <ul class="topLogin">
                    <li><a href="dashboard.php"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="../php/logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="header">
                    <h1><a href="../website/index.php">LMS Admin</a></h1>
                </div>

                <label for="show-menu" class="show-menu"><img src="../website/menu.png" style="width:100%" alt="-"></label>
                <input type="checkbox" id="show-menu" role="button">


                <ul class="navbar" id="menu">
                    <li><a href="dashboard.php">DashBoard</a></li>
                    <li><a href="./admin_courses.php">Courses</a>
                    </li>
                    <li><a href="">Events</a>
                    <ul class="hiddenNav">
                        <li><a href="./admin_addevents.php">Add Events</a></li>
                        <li><a href="./admin_viewevents.php">View Events</a></li>
                    </ul>
                    </li>
                    <li><a href="./admin_lecturers.php">Lecturers</a></li>
                    <li><a href="./admin_students.php">Students</a></li>
                </ul>
            </div>
        </nav>