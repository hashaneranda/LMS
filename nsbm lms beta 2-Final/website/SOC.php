<?php   include "../php/db.php";    ?>
<?php   include "./includes/header_courses.php";    ?>
<?php   include "./includes/nav_courses.php";    ?>

    <section class="faculty container">
        <div class="heading">
            <h1>School Of Computing</h1>
        </div>
        <div class="navOrder">

        </div>
        
        
        <?php
        if(!isset($_SESSION['user_role'])){ $x="login.php"; }
            if(isset($_SESSION['user_role'])){
                if($_SESSION['user_role'] =='student'){  $x="courses_std.php";  }
                else if($_SESSION['user_role'] =='lecturer'){ $x="courses_lec.php"; }
                else{$x="login.php";}
                
                
            }
        ?>
        <?php
        $query ="select DISTINCT yr from courses where dept_ID ='SOC' order by yr";
        $select_all_years_from_courses_query=mysqli_query($connection,$query);
        
        for ($i=0; $row=mysqli_fetch_assoc($select_all_years_from_courses_query);$i++){
            $yr = $row["yr"];
        ?>
        <input id="toggle<?php echo $i ?>" type="checkbox">
        <label id="yr<?php echo $i ?>" for="toggle<?php echo $i ?>"><?php echo $yr ?></label>
        <div id="expand<?php echo $i ?>">
            <section>
                 <p><b>Courses</b></p>
                  <?php 
            
                        $query1 ="select * from courses where dept_ID ='SOC' and yr ='$yr'";
                        $select_all_courses_query=mysqli_query($connection,$query1);
        
                        while($row1=mysqli_fetch_assoc($select_all_courses_query)){
                            $module_name = $row1["module_name"];
                            $module_code = $row1["module_code"];
       
            ?>
                   
                   <a href="<?php echo $x ?>?mod_code=<?php echo $module_code ?>&mod_name=<?php echo $module_name ?>&dept=<?php echo 'SOC' ?>"><p><b><?php echo $module_code ?></b><?php echo $module_name ?></p></a>
                  <?php 
                }
            $i++;
            ?>
            </section>
        </div> 
        
        
        <?php
            
        }
        
        ?>
       
    </section>

 <?php   include "./includes/footer.php";    ?>
