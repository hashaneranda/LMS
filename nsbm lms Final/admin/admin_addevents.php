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
                    <?php
                    include "./includes/add_event.php";
                    ?>
                    <h2>Add Event</h2>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input type="text" name="e_name" placeholder="Enter Event name">
                            <span class="err"><?php echo $nameErr;?></span>
                        </div>
                        <div class="row">
                             <textarea name="content" rows="10" cols="30" placeholder="Enter event description"></textarea> 
                            <span class="err"><?php echo $contentErr;?></span>
                        </div>
                        <div class="row">
                            <input type="text" name="e_venue" placeholder="Enter venue ">
                            <span class="err"><?php echo $venueErr;?></span>
                        </div>
                        <div class="row">
                            <input type="text" name="e_date" placeholder="Enter date(format: yyyy-mm-dd) "><br>
                            <span class="err"><?php echo $dateErr;?></span>
                        </div>
                        <div class="row">
                            <input type="text" name="e_time" placeholder="Enter Time (hh:mm) "><br>
                            <span class="err"><?php echo $timeErr;?></span>
                        </div>
                        <div class="row">
                            Select image to upload:<br>
                            <input type="file" name="fileToUpload" id="fileToUpload"><br>
                            <span class="err"><?php echo $uploadErr;?></span>
                        </div>
                        <input type="submit" name="submit" value="Add event">
                    </form>
                </div>
            </div>
        </div>
                
               
              <?php   include "./includes/footer.php";    ?>