<?php
//including the connection to database with $connection variable
include "../php/db.php";    ?>
<?php session_start(); ?>
    <?php   include "./includes/head.php";
            include "./includes/navBars.php";   ?>
    
<?php
if(!isset($_SESSION['user_role'])){ header("Location: ../website/login.php");   }
    if(isset($_SESSION['user_role'])){
        if($_SESSION['user_role']!=='admin'){    header("Location: ../website/index.php");   }
    }
?>   
        <div class="inq container">
            <h1>Subscribers</h1>

            <?php
        
        
        $query ="select * from subscribers";
        $select_inquiries=mysqli_query($connection,$query);
        
        ?>
                <table>
                    <thead>
                        <tr>
                            <th>Subscriber_ID</th>
                            <th>Subscriber email</th>
                        </tr>
                    </thead>

                    <?php
                
                while($row=mysqli_fetch_assoc($select_inquiries)){
            $id = $row["sub_id"];
            $email = $row["sub_email"];
            
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$email}</td>";
            echo "<td><a href='inquiries.php?delete={$id}' class='delete'>Delete</a></td>";
            echo "</tr>";

        }
        ?>
                        <tbody>

                        </tbody>
                </table>

    <?php
            if(isset($_GET['delete'])){
                $id=$_GET['delete'];
                $query="delete from subscribers where sub_id = '{$id}'";
                $delete_query=mysqli_query($connection,$query);
            }
            ?>

        </div>

               
<?php

include "./includes/footer.php";

?>