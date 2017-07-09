<?php 
                $unameErr=$fnameErr=$passErr=$mailErr="";
                $l_username=$l_password=$l_fullname=$l_mail="";
                
                if(isset($_POST['submit'])){
                    
                    
                    
                    if($_POST['l_username'] =="" || empty($_POST['l_username'])){
                        $unameErr="* lecturer username is required";
                    }else{
                        $l_username=$_POST['l_username'];
                    }
                    
                    if($_POST['l_password'] =="" || empty($_POST['l_password'])){
                        $passErr="* lecturer password is required";
                    }else{
                        $l_password=$_POST['l_password'];
                    }
                    if($_POST['l_fullname'] =="" || empty($_POST['l_fullname'])){
                        $fnameErr="* lecturer fullname is required";
                    }else{
                        $l_fullname=$_POST['l_fullname'];
                    }
                    if($_POST['l_mail'] =="" || empty($_POST['l_mail'])){
                        $mailErr="* lecturer email is required";
                    }
                    else{
                        $l_mail=$_POST['l_mail'];
                    }
                 
                    
                  $query ="Insert into users (username,password,user_fullname,user_email,role)";
                    $query .="values('{$l_username}','{$l_password}','{$l_fullname}','{$l_mail}','lecturer')";
                    
                    $create_lec_query=mysqli_query($connection,$query);
                    if(!$create_lec_query){
                        die('QUERY FAILED'.mysqli_error($connection));
                    }
                        
                    
                }
                
                ?>