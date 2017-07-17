                    <?php

                    if(isset($_GET['edit'])){
                        
                        $lect_id=$_GET['edit'];
                        
                        $query="select * from users where user_id='{$lect_id}'";
                        $select_edit_lecturer=mysqli_query($connection,$query);
                        
                        while($row=mysqli_fetch_assoc($select_edit_lecturer)){
                            $lect_uname=$row['username'];
                            $lect_fname=$row['user_fullname'];
                            $lect_email = $row["user_email"];
                            $lect_pass=$row["password"]
                            
                            ?>
                            <h2 id="edit">Edit lecturer</h2>
                          <form action="#" method="post">
                        <div class="col-sm-3">
                           
                            <input type="text" name="l_username" value="<?php if(isset($lect_uname)){echo $lect_uname;} ?>">
                            <span class="err"><?php echo $unameErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="password" name="l_password" placeholder="Enter new password ">
                            <span class="err"><?php echo $passErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="l_fullname" value="<?php if(isset($lect_fname)){echo $lect_fname;} ?>">
                            <span class="err"><?php echo $fnameErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="l_mail" value="<?php if(isset($lect_fname)){echo $lect_fname;} ?>"><br>
                            <span class="err"><?php echo $mailErr;?></span>
                        </div>
                        <input type="submit" name="update" value="Add lecturer">
                    </form>
                            
                             
                              <?php 
                        }
                    }
                    ?>