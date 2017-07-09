<?php   include "db.php";   ?>
<?php session_start(); ?>
 <?php  
   if(isset($_POST["register"])){
       $fname=mysql_real_escape_string($_POST["fname"]);
       $uname=mysql_real_escape_string($_POST["uname"]);
       $pass=mysql_real_escape_string($_POST["pass"]);
       $mail=mysql_real_escape_string($_POST["mail"]);
       $index=mysql_real_escape_string($_POST["index"]);
        
        $query ="Insert into users (Index_no,username,password,user_fullname,user_email,role)";
        $query .="values('{$index}','{$uname}','{$pass}','{$fname}','{$mail}','student')";
                    
                    $create_std_query=mysqli_query($connection,$query);
                    if(!$create_std_query){
                        die('QUERY FAILED'.mysqli_error($connection));
                    }
    
?>
    