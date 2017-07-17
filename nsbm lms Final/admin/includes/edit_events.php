 <?php
    if(isset($_GET['edit'])){                     
        $id=$_GET['edit'];
        $query="select * from events where events_id='{$id}'";
        $select_edit_events=mysqli_query($connection,$query);
                        
        while($row=mysqli_fetch_assoc($select_edit_events)){
                $id = $row["events_id"];
                $ev_name = $row["event_name"];
                $ev_image = $row["event_image"];
                $ev_content = $row["event_content"];
                $ev_date = $row["date"];
                $ev_time = $row["time"];
                $ev_venue = $row["venue"];
            ?>
            <div class="addEvent">
                    <h2>Add Event</h2>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input type="text" name="e_name" value="<?php   echo $ev_name;    ?>">
                            
                        </div>
                        <div class="row">
                             <textarea name="content" rows="10" cols="30" value="<?php   echo $ev_content;    ?>"></textarea> 
                            
                        </div>
                        <div class="row">
                            <input type="text" name="e_venue" value="<?php   echo $ev_venue;    ?>">
                            
                        </div>
                        <div class="row">
                            <input type="date" name="e_date" value="<?php   echo $ev_date;    ?>"><br>
                            
                        </div>
                        <div class="row">
                            <input type="text" name="e_time" value="<?php   echo $ev_time;    ?>"><br>
                            
                        </div>
                        <div class="row">
                            Select image to upload:<br>
                            <input type="file" name="fileToUpload" id="fileToUpload"><br>
                            
                        </div>
                        <input type="submit" name="update" value="Update event">
                    </form>
                </div>
            <?php
            
        }
    }
?>