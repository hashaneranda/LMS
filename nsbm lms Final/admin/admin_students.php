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
            include "./includes/navBars_student.php"    ?>
            
        <div class="main">
            <div class="container">
                <h1>Welcome to Admin <sub style="color:gray;"> <?php echo $_SESSION['fullname'] ?> </sub></h1>
                <div class="existCourses">
            <?php
        $query ="select * from users where role='student'";
        $select_student=mysqli_query($connection,$query);
        
        ?>
                <table>
                    <thead>
                        <tr>
                            <th>username</th>
                            <th>user_fullname</th>
                            <th>email</th>
                            <th>Index number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
        while($row=mysqli_fetch_assoc($select_student)){
            $username = $row["username"];
            $user_fullname = $row["user_fullname"];
            $user_email = $row["user_email"];
            $index_no = $row["Index_no"];
            $uid=$row["user_id"];
            
            echo "<tr>";
            echo "<td>{$username}</td>";
            echo "<td>{$user_fullname}</td>";
            echo "<td>{$user_email}</td>";
            echo "<td>{$index_no}</td>";
            echo "<td><a href='admin_students.php?delete={$uid}' class='delete'>Delete</a></td>";
            echo "</tr>";

        }
        ?>
                    </tbody>
                </table>
                
                <?php
            
            if(isset($_GET['delete'])){
                $userID=$_GET['delete'];
                
                $query="delete from users where user_id = '{$userID}'";
                $delete_query=mysqli_query($connection,$query);
            } 
            ?>
        </div> 
            </div>  
</div>           
      <?php   include "./includes/footer.php";    ?>              