<?php   include "../php/db.php";    ?>
<?php   include "./includes/header.php";    ?>
<?php   include "./includes/nav_home.php";    ?>
    <div class="main">
        <section id="landing">
            <div class="container">
                <div class="loginBox">
                    <img src="./imgs/user2.png" id="login-img" alt="user">
                    <form action="../php/login.php" method="post" >
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
                    <a href="forget.html"> Don't have a account!<br> REGISTER NOW </a>
                </div>
            </div>
        </section>
        <section id="sponsers">
            <div class="container">
                <h1>Partner Universities</h1>
                <p>Affiliated to the Top Ranked Universities</p>
                <div class="row">
                    <div class=" col-sm-3">
                        <img src="./imgs/logos/nEmblem.jpg" alt="">
                    </div>
                    <div class=" col-sm-3">
                        <img src="./imgs/logos/ugc.jpg" alt="">
                    </div>
                    <div class=" col-sm-3">
                        <img src="./imgs/logos/acu.jpg" alt="">
                    </div>
                    <div class=" col-sm-3">
                        <img src="./imgs/logos/apqn.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-3">
                        <img src="./imgs/logos/aacsb.jpg" alt="">
                    </div>
                    <div class=" col-sm-3">
                        <img src="./imgs/logos/nibm.jpg" alt="">
                    </div>
                    <div class=" col-sm-3">
                        <img src="./imgs/logos/limkokwing.jpg" alt="">
                    </div>
                    <div class=" col-sm-3">
                        <img src="./imgs/logos/ucd.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6  col-sm-6">
                        <img src="./imgs/logos/plymouth.jpg" alt="">
                    </div>
                    <div class="col-md-6  col-sm-6">
                        <img src="./imgs/logos/victoria.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="courses">
            <div class="container">
                <h1>Courses</h1>
                <p>Imagine Your Future With No Limits!</p>
                <div class="box col-sm-4">
                    <img src="./imgs/pexels-photo-251225.jpg" alt="computing">
                    <div class="text-box">
                        <h2>School of Computing</h2>
                        <form action="SOC.php" method="get"><button>View courses</button></form>
                    </div>
                </div>
                <div class="box col-sm-4">
                    <img src="./imgs/pexels-photo-buisniness.jpg" alt="manegment">
                    <div class="text-box">
                        <h2>School of Business</h2>
                        <form action="SOB.php" method="get"><button>View courses</button></form>
                    </div>
                </div>
                <div class="box col-sm-4">
                    <img src="./imgs/pexels-photo-256381.jpg" alt="engineering">
                    <div class="text-box">
                        <h2>School of Engineering</h2>
                        <form action="#" method="get"><button>Coming Soon</button></form>
                    </div>
                </div>
            </div>
        </section>
        <section id="events">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="./imgs/pexels-photo78978.jpg" alt="events" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <img src="./imgs/pexels-photo-196652.jpg" alt="events" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <img src="./imgs/pexels-photo-262524.jpg" alt="events" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div class="container">
                    <h1>Events</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <form action="event.php"><button>View Events</button></form>
                </div>
            </div>

            <div style="text-align:center;background-color: #55C34D;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <h1>About NSBM</h1>
                <div class="box">
                    <p>NSBM Green University Town is the first ever green university in South Asia and sets an example for the whole South Asia by paving the way for environmental sustainability. The university is open for both national and international student community and it has turned a new chapter in Sri Lankan higher education. NSBM Green University Town is established under the Ministry of Skills Development and Vocational Training and it is renowned for its world-class academic offerings. This state-of-the-art university offers nationally and internationally recognized, UGC approved degree programmes and foreign degree programmes in three faculties: Management, Computing and Engineering. The university is spread over an area of 26 acres and the massive university complex was built with the intention of providing an opportunity for both national and international students to have a fully-fledged education in Sri Lanka. Currently around 9000 students are studying at the university and the highly qualified local and foreign lecturers who teach at the university are committed to prepare these undergraduates to face any challenge the world has to offer. The university’s commitment to excellence in education extends beyond course delivery since the university has created mutually beneficial relationships with the industry to provide students with opportunities to get exposure to the real- world work places. Inspired by the vision of making Sri Lanka the best educational hub in Asia, NSBM Green University Town is dedicated to gift the future leaders to the world with its fully fledged university..
                    </p>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container head">
                <h1>NSBM Green Univeristy</h1>
                <p>We are looking forward to hearing from you soon...</p>
                <p>inquiries@nsbm.lk</p>
                <p>011 544 5000</p>
                <div class="container">
                   <?php
                    $nameErr=$emailErr=$msgErr="";
                    $name=$email=$msg="";
                    
                    if(isset($_POST['submit'])){
                        
                        $tele=$_POST['tele'];
                        
                        
                        if($_POST['name'] =="" || empty($_POST['name'])){
                            $nameErr="* your name is required";
                        }else{
                            $name=$_POST['name'];
                        }
                        if($_POST['email'] =="" || empty($_POST['email'])){
                            $emailErr="* your email is required";
                        }else{
                            $email=$_POST['email'];
                        }
                        if($_POST['msg'] =="" || empty($_POST['msg'])){
                            $msgErr="* message is required";
                        }else{
                            $msg=$_POST['msg'];
                        }
                        if($name!=="" && $email !=="" && $msg!==""){
                            $query="insert into inquiries(inq_name,inq_email,inq_msg) values ('{$name}','{$email}','{$msg}') ";

                            $inqiry_query=mysqli_query($connection,$query);

                            if(!$inqiry_query){
                                die('QUERY FAILED'.mysqli_error($connection));
                            }
                        }
                    } 
                    
                    ?>             
                    <form action="#" method="post" id="inqForm">
                        <div class="row">
                            <input type="text" placeholder="Name*" name="name" class="col-sm-4">
                            <span class="err"><?php echo $nameErr;?></span>
                            <input type="email" placeholder="Email*" name="email" class="col-sm-4">
                            <span class="err"><?php echo $emailErr;?></span>
                            <input type="text" placeholder="Phone Number" name="tele" class="col-sm-4">
                        </div>
                        <div class="row">
                            <textarea name="msg" cols="30" rows="10" placeholder="Write your message here.."></textarea>
                            <span class="err"><?php echo $msgErr;?></span>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit" name="submit" >
                        </div>
                    </form>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.579298859444!2d80.0398420847128!3d6.820910926595148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x546c34cd99f6f488!2sNSBM+Green+University!5e0!3m2!1sen!2sus!4v1498394248257" width="800" height="600" style="border:0" allowfullscreen></iframe>
        </section>
            </div>

        
        <?php   include "./includes/footer.php";    ?>
       