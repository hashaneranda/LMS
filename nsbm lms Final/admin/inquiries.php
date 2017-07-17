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
            <h1>Inqiries</h1>

            <?php
        
        
        $query ="select * from inquiries";
        $select_inquiries=mysqli_query($connection,$query);
        
        ?>
                <table>
                    <thead>
                        <tr>
                            <th>Inquiry ID</th>
                            <th>Senders name</th>
                            <th>Senders email</th>
                            <th>message</th>
                        </tr>
                    </thead>

                    <?php
                
                while($row=mysqli_fetch_assoc($select_inquiries)){
            $id = $row["inq_id"];
            $name = $row["inq_name"];
            $email = $row["inq_email"];
            $msg = $row["inq_msg"];
            
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$email}</td>";
            echo "<td>{$msg}</td>";
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
                $query="delete from inquiries where inq_id = '{$id}'";
                $delete_query=mysqli_query($connection,$query);
            }
            ?>

        </div>

               
<?php

include "./includes/footer.php";

?>