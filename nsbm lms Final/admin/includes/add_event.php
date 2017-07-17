<?php
    $nameErr=$venueErr=$dateErr=$contentErr=$timeErr=$uploadErr="";
    $e_name=$content=$e_venue=$e_date=$e_time=$file="";

    if(isset($_POST['submit'])){
                    
                    
                    
                    if($_POST['e_name'] =="" || empty($_POST['e_name'])){
                        $nameErr="* event name is required";
                    }else{
                        $e_name=$_POST['e_name'];
                    }
                    
                    if($_POST['content'] =="" || empty($_POST['content'])){
                        $contentErr="* event content is required";
                    }else{
                        $content=$_POST['content'];
                    }
                    if($_POST['e_date'] =="" || empty($_POST['e_date'])){
                        $dateErr="* event date is required";
                    }else{
                        $e_date=$_POST['e_date'];
                    }
                    if($_POST['e_venue'] =="" || empty($_POST['e_venuee_time'])){
                        $venueErr="* event venue is required";
                    }
                    else{
                        $e_venue=$_POST['e_venue'];
                    }
                    if($_POST['e_time'] =="" || empty($_POST['e_time'])){
                        $timeErr="* event time is required";
                    }
                    else{
                        $e_time=$_POST['e_time'];
                    }
                    $target_dir = "../website/uploads/events/$e_name";
                    // Check if image file is a actual image or fake image
                    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
                    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                        $f=str_replace('../website/', './', $target_file);
                        $file="$f";
                        
                    }else {
                        $uploadErr="* image upload failed";
                    }
                    $query ="Insert into events(event_name,event_image,event_content,venue,date,time)";
                    $query .="values('{$e_name}','{$file}','{$content}','{$e_venue}','{$e_date}','{$e_time}')";
                    
                    $create_event_query=mysqli_query($connection,$query);
                    if(!$create_event_query){
                        die('QUERY FAILED'.mysqli_error($connection));
                    }
                        
                    
                }



?>