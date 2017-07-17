<?php   include "../php/db.php";    ?>
<?php   include "./includes/header_events.php";    ?>
<?php   include "./includes/nav_events.php";    ?>

<?php
    if(isset($_GET['event'])){
        $id=$_GET['event'];
        
        $query="select * from events where events_id='{$id}'";
        $get_event=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($get_event)){
            $e_id=$row["events_id"];
            $e_name=$row["event_name"];
            $e_image=$row["event_image"];
            $e_content=$row["event_content"];
            $e_venue=$row["venue"];
            $e_date=$row["date"];
            $e_time=$row["time"];
   
?>

<div class="eventcontent">
    <div class="container heading">
        <h1><?php echo $e_name;  ?></h1>
    </div>
    <div class="container content">
        <img src="<?php echo $e_image;  ?>" alt="event">
        <p class="desc"><?php echo $e_content;  ?></p>
        <p>Venue : <?php echo $e_venue;  ?></p>
        <p>Date : <?php echo $e_date;  ?></p>
        <p>Time : <?php echo $e_time;  ?></p>
        <form action="#" method="post">
            <input type="submit" value="Join now" name="join">
        </form>
    </div>
</div>
        
<?php
             }
    }
?>
<?php
                if(isset($_POST['join'])){
                    if(!isset($_SESSION['user_role'])){ header("Location: login.php");   }
                    $u_id=$_SESSION['userid'];
                    $query="select * from users where user_id='{$u_id}'";
                    $get_user=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($get_user)){
                        $email=$row["user_email"];
                        $body="You are successfully registered to {$e_name}.
                                Event will be helid on {$e_date} from {$e_time} onwards at {$e_venue}.
                                THANK YOU";
                        $headers = "From: lmsbeta50@gmail.com" . "\r\n" ."CC: ";

                        mail($email,$e_name,$body,$headers);
                        
                    }  
                    $query1="insert into eventuser(user_id,events_id) values('{$u_id}','{$e_id}')";
                    $insert_userEvent=mysqli_query($connection,$query1);
                    if(!$insert_userEvent){
                        die('QUERY FAILED'.mysqli_error($connection));
                    }
                    ?>
            <div class="container" id="res">
                <p>You are Successfully registered for this event.</p>
            </div>
               <?php
                }
            ?>


<div class="container" style="padding:50px;">
    
</div>


 <?php   include "./includes/footer.php";    ?>