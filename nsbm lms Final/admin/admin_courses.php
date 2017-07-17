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

        include "./includes/navBars_course.php"
        
        ?>
      
      
        <div class="main">
            <div class="container">
                <h1>Welcome to Admin <sub style="color:gray;"> <?php echo $_SESSION['fullname'] ?> </sub></h1>
                <div class="addCourse">
                    <?php
                    include "./includes/add_course.php";
                    ?>
                    <h2>Add course</h2>
                    <form action="#" method="post">
                        <div class="col-sm-3">
                            <input type="text" name="m_code" placeholder="Enter module code">
                            <span class="err"><?php echo $codeErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="m_name" placeholder="Enter module name">
                            <span class="err"><?php echo $nameErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="m_yr" placeholder="Enter year ">
                            <span class="err"><?php echo $yrErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="m_dept" placeholder="Enter department "><br>
                            <span class="err"><?php echo $deptErr;?></span>
                        </div>
                        <input type="submit" name="submit" value="Add course">
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="addCourse">
                   <?php    include "./includes/edit_course.php";    ?>

                    <?php
                    if(isset($_POST['update'])){
                        
                        $m_code=$_POST['m_code'];
                        $m_name=$_POST['m_name'];
                        $m_yr=$_POST['m_yr'];
                        $m_dept=$_POST['m_dept'];
                        
                        
                        $query="update courses set module_name='{$m_name}',yr='{$m_yr}',dept_ID='{$m_dept}' where module_code='{$m_code}'";
                        
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
        $query ="select * from courses";
        $select_courses=mysqli_query($connection,$query);
        
        ?>
                <table>
                    <thead>
                        <tr>
                            <th>Module Code</th>
                            <th>Module Name</th>
                            <th>Year</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
        while($row=mysqli_fetch_assoc($select_courses)){
            $yr = $row["yr"];
            $module_code = $row["module_code"];
            $module_name = $row["module_name"];
            $dept = $row["dept_ID"];
            
            echo "<tr>";
            echo "<td>{$module_code}</td>";
            echo "<td>{$module_name}</td>";
            echo "<td>{$yr}</td>";
            echo "<td>{$dept}</td>";
            echo "<td><a href='admin_courses.php?edit={$module_code}' class='edit'>Edit</a></td>";
            echo "<td><a href='admin_courses.php?delete={$module_code}&name={$module_name}&dept={$dept}' class='delete'>Delete</a></td>";
            echo "</tr>";

        }
        ?>
                    </tbody>
                </table>
                
                <?php
            
            if(isset($_GET['delete'])){
                $the_module_code=$_GET['delete'];
                
                $query="delete from courses where module_code = '{$the_module_code}'";
                $delete_query=mysqli_query($connection,$query);
                
                function rrmdir($dir) {
                   if (is_dir($dir)) {
                     $objects = scandir($dir);
                     foreach ($objects as $object) {
                       if ($object != "." && $object != "..") {
                         if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
                       }
                     }
                     reset($objects);
                     rmdir($dir);
                      
                   }
                }
                $folder=$_GET['name'];
                $dept=$_GET['dept'];
                rrmdir("../website/uploads/$dept/$folder");
                
                
            } 
            ?>
        </div>
        
        
<?php   include "./includes/footer.php";    ?>