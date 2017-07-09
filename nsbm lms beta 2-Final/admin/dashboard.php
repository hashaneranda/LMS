<?php
//including the connection to database with $connection variable
include "../php/db.php";
?>
 <?php session_start(); ?>
<?php
if(!isset($_SESSION['user_role'])){ header("Location: ../website/login.php");   }
    if(isset($_SESSION['user_role'])){
        if($_SESSION['user_role']!=='admin'){    header("Location: ../website/index.php");   }
    }
?>
    <?php   include "./includes/head.php";
            include "./includes/navBars_dash.php"    ?>
            
             
    <div class="container dashboard">
            <a href="admin_students.php"><div class="dashbox">
               <?php
                    $query="select COUNT(user_id) from users where role='student'";
                    $get_students=mysqli_query($connection,$query);
                    if(!$get_students){
                                    die('QUERY FAILED'.mysqli_error($connection));
                                }
                    while($row=mysqli_fetch_assoc($get_students)){
                        $stdno=$row['COUNT(user_id)'];


                ?>   
                <h1>Students : <?php   echo $stdno;   ?></h1>
                <?php    }  ?>
            </div></a>
            <a href="admin_lecturers.php"><div class="dashbox">
               <?php
                    $query="select COUNT(user_id) from users where role='lecturer'";
                    $get_students=mysqli_query($connection,$query);
                    if(!$get_students){
                                    die('QUERY FAILED'.mysqli_error($connection));
                                }
                    while($row=mysqli_fetch_assoc($get_students)){
                        $stdno=$row['COUNT(user_id)'];


                ?>   
                <h1>Lecturers : <?php   echo $stdno;   ?></h1>
                <?php    }  ?>
            </div></a>
            <a href="admin_courses.php"><div class="dashbox">
               <?php
                    $query="select COUNT(module_code) from courses where dept_ID='SOC'";
                    $get_students=mysqli_query($connection,$query);
                    if(!$get_students){
                                    die('QUERY FAILED'.mysqli_error($connection));
                                }
                    while($row=mysqli_fetch_assoc($get_students)){
                        $stdno=$row['COUNT(module_code)'];


                ?>   
                <h1>Courses in School of Computing : <?php   echo $stdno;   ?></h1>
                <?php    }  ?>
            </div></a>
            <a href="admin_courses.php"><div class="dashbox">
               <?php
                    $query="select COUNT(module_code) from courses where dept_ID='SOB'";
                    $get_students=mysqli_query($connection,$query);
                    if(!$get_students){
                                    die('QUERY FAILED'.mysqli_error($connection));
                                }
                    while($row=mysqli_fetch_assoc($get_students)){
                        $stdno=$row['COUNT(module_code)'];


                ?>   
                <h1>Courses in School of Business : <?php   echo $stdno;   ?></h1>
                <?php    }  ?>
            </div></a>
            <a href="admin_viewevents.php"><div class="dashbox">
               <?php
                    $query="select COUNT(events_id) from events";
                    $get_students=mysqli_query($connection,$query);
                    if(!$get_students){
                                    die('QUERY FAILED'.mysqli_error($connection));
                                }
                    while($row=mysqli_fetch_assoc($get_students)){
                        $stdno=$row['COUNT(events_id)'];


                ?>   
                <h1>Events : <?php   echo $stdno;   ?></h1>
                <?php    }  ?>
            </div></a>
              <a href="inquiries.php"><div class="dashbox">
               <?php
                    $query="select COUNT(inq_id) from inquiries";
                    $get_students=mysqli_query($connection,$query);
                    if(!$get_students){
                                    die('QUERY FAILED'.mysqli_error($connection));
                                }
                    while($row=mysqli_fetch_assoc($get_students)){
                        $stdno=$row['COUNT(inq_id)'];


                ?>   
                <h1>Inquiries : <?php   echo $stdno;   ?></h1>
                <?php    }  ?>
            </div></a>
            <a href="subscribe.php"><div class="dashbox">
               <?php
                    $query="select COUNT(sub_id) from subscribers";
                    $get_students=mysqli_query($connection,$query);
                    if(!$get_students){
                                    die('QUERY FAILED'.mysqli_error($connection));
                                }
                    while($row=mysqli_fetch_assoc($get_students)){
                        $stdno=$row['COUNT(sub_id)'];


                ?>   
                <h1>Subscribers : <?php   echo $stdno;   ?></h1>
                <?php    }  ?>
            </div></a>
        </div>       
        
       <?php   include "./includes/footer.php";    ?>