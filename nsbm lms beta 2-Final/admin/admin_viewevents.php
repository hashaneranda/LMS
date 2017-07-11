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
            include "./includes/navBars_events.php"    ?>
        <div class="main">
            <div class="container">
                <h1>Welcome to Admin <sub style="color:gray;"> <?php echo $_SESSION['fullname'] ?> </sub></h1>
                <div class="addEvent">
                   <?php    include "./includes/edit_events.php";    ?>
                   <?php
                    if(isset($_POST['update'])){
                        $e_name=$_POST['e_name'];
                        $content=$_POST['content'];
                        $e_date=$_POST['e_date'];
                        $e_venue=$_POST['e_venue'];
                        $e_time=$_POST['e_time'];
                        $target_dir = "../website/uploads/events/$e_name";
                        // Check if image file is a actual image or fake image
                        $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
                        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                        $f=str_replace('../website/', './', $target_file);
                        $file="$f";
                        }
                        $query="update events set  event_name='{$e_name}',event_content='{$content}',date='{$e_date}',venue='{$e_venue}',time='{$e_time}',event_image='{$file}' where events_id='{$id}'";
                        
                        $update_post=mysqli_query($connection,$query);
                        if(!$update_post){
                            die('QUERY FAILED'.mysqli_error($connection));
                        }                        
                    }
                    ?>
                    <h2>Events</h2>            
                    <div class="existCourses">
            <?php
        $query ="select * from events";
        $select_events=mysqli_query($connection,$query);      
        ?>
                <table class="viewEvents">
                    <thead>
                        <tr>
                            <th>Event name</th>
                            <th>Event image</th>
                            <th>Event content</th>
                            <th>venue</th>
                            <th>date</th>
                            <th>time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
        while($row=mysqli_fetch_assoc($select_events)){
            $id = $row["events_id"];
            $e_name = $row["event_name"];
            $e_image = $row["event_image"];
            $e_content = $row["event_content"];
            $e_date = $row["date"];
            $e_time = $row["time"];
            $e_venue = $row["venue"];
            
            echo "<tr>";
            echo "<td>{$e_name}</td>";
            echo "<td><img style='width:100%' src='../website/{$e_image}' alt='image'></td>";
            echo "<td>{$e_content}</td>";
            echo "<td>{$e_date}</td>";
            echo "<td>{$e_time}</td>";
            echo "<td>{$e_venue}</td>";
            echo "<td><a href='admin_viewevents.php?edit={$id}' class='edit'>Edit</a></td>";
            echo "<td><a href='admin_viewevents.php?delete={$id}&name={$e_image}' class='delete'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
                    </tbody>
                </table> 
                <?php      
            if(isset($_GET['delete'])){
                $e_id=$_GET['delete'];
                $query="delete from events where events_id = '{$e_id}'";
                $delete_query=mysqli_query($connection,$query);
                if($_GET['name']!==""){
                    $folder=$_GET['name'];
                    $f=str_replace('./', '../website/', $folder);
                    unlink($f);    
                    }
            } 
            ?>
        </div>
                </div>
                </div>
</div>
        <?php   include "./includes/footer.php";    ?>