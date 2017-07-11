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


   

    <?php
        
        include "./includes/head.php";

        include "./includes/navBars_lect.php"
        
        ?>
      
      
        <div class="main">
            <div class="container">
                <h1>Welcome to Admin <sub style="color:gray;"> <?php echo $_SESSION['fullname'] ?> </sub></h1>
                <div class="addCourse">
                    <?php
                    include "./includes/add_lecturer.php";
                    ?>
                    <h2>Add lecturers</h2>
                    <form action="#" method="post">
                        <div class="col-sm-3">
                            <input type="text" name="l_username" placeholder="Enter lecturer username">
                            <span class="err"><?php echo $unameErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="password" name="l_password" placeholder="Enter password">
                            <span class="err"><?php echo $passErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="l_fullname" placeholder="Enter lecturer full name">
                            <span class="err"><?php echo $fnameErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="l_mail" placeholder="Enter lecturer email "><br>
                            <span class="err"><?php echo $mailErr;?></span>
                        </div>
                        <input type="submit" name="submit" value="Add lecturer">
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="addCourse">
                   <?php    include "./includes/edit_lecturer.php";    ?>

                    <?php
                    if(isset($_POST['update'])){
                        
                        $l_username=$_POST['l_username'];
                        
                       
                                if($_POST['l_password'] =="" || empty($_POST['l_password'])){
                        }
                        else{
                            $l_password=$lect_pass;
                        }
                          
                        $l_fullname=$_POST['l_fullname'];
                        $l_mail=$_POST['l_mail'];
                        
                        
                        $query="update users set username='{$l_username}',user_fullname='{$l_fullname}',user_email='{$l_mail}' where user_id='{$lect_id}'";
                        
                        $update_post=mysqli_query($connection,$query);
                        if(!$update_post){
                            die('QUERY FAILED'.mysqli_error($connection));
                        }
                    }
                    
                        
                    
                    ?>
                    
                </div>
            </div>
        <div class="existCourses">
            <?php
        $query ="select * from users where role='lecturer'";
        $select_lec=mysqli_query($connection,$query);
        
        ?>
                <table>
                    <thead>
                        <tr>
                            <th>username</th>
                            <th>full name</th>
                            <th>email</th>
                            <th>role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
        while($row=mysqli_fetch_assoc($select_lec)){
            $lec_username = $row["username"];
            $lec_fullname = $row["user_fullname"];
            $lec_email = $row["user_email"];
            $lec_role = $row["role"];
            $lec_id=$row["user_id"];
            
            echo "<tr>";
            echo "<td>{$lec_username}</td>";
            echo "<td>{$lec_fullname}</td>";
            echo "<td>{$lec_email}</td>";
            echo "<td>{$lec_role}</td>";
            echo "<td><a href='admin_lecturers.php?edit={$lec_id}' class='edit'>Edit</a></td>";
            echo "<td><a href='admin_lecturers.php?delete={$lec_id}' class='delete'>Delete</a></td>";
            echo "</tr>";

        }
        ?>
                    </tbody>
                </table>
                
                <?php
            
            if(isset($_GET['delete'])){
                $the_lec_id=$_GET['delete'];
                
                $query="delete from users where user_id = '{$the_lec_id}'";
                $delete_query=mysqli_query($connection,$query);  
            } 
            ?>
        </div>
        
        
<?php

include "./includes/footer.php";

?>