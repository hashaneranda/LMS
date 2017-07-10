<?php 
                $unameErr=$fnameErr=$passErr=$mailErr="";
                $l_username=$l_password=$l_fullname=$l_mail="";
                
                if(isset($_POST['submit'])){
                    $r=1;
                    
                    
                    if($_POST['l_username'] =="" || empty($_POST['l_username'])){
                        $unameErr="* lecturer username is required";
                        $r=0;
                    }else{
                        $l_username=$_POST['l_username'];
                    }
                    
                    if($_POST['l_password'] =="" || empty($_POST['l_password'])){
                        $passErr="* lecturer password is required";
                        $r=0;
                    }else{
                        $l_password=$_POST['l_password'];
                                                $query1="select randSalt from users";
                       $select_rand=mysqli_query($connection,$query1);
                       if(!$select_rand){
                                        die('QUERY FAILED'.mysqli_error($connection));
                                    }
                       $row=mysql_fetch_array($select_rand);
                       $salt=$row['randSalt'];     
                       $l_password=crypt($l_password,$salt);
                    }
                    if($_POST['l_fullname'] =="" || empty($_POST['l_fullname'])){
                        $fnameErr="* lecturer fullname is required";
                        $r=0;
                    }else{
                        $l_fullname=$_POST['l_fullname'];
                    }
                    if($_POST['l_mail'] =="" || empty($_POST['l_mail'])){
                        $mailErr="* lecturer email is required";
                        $r=0;
                    }
                    else{
                        $l_mail=$_POST['l_mail'];
                    }

                 if($r==1){
                    
                  $query ="Insert into users (username,password,user_fullname,user_email,role)";
                    $query .="values('{$l_username}','{$l_password}','{$l_fullname}','{$l_mail}','lecturer')";
                    
                    $create_lec_query=mysqli_query($connection,$query);
                    if(!$create_lec_query){
                        die('QUERY FAILED'.mysqli_error($connection));
                    }
                        
                    }
                }
                
                ?>