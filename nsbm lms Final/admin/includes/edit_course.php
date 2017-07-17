                    <?php
                    if(isset($_GET['edit'])){
                        
                        $module_code=$_GET['edit'];
                        
                        $query="select * from courses where module_code='{$module_code}'";
                        $select_edit_courses=mysqli_query($connection,$query);
                        
                        while($row=mysqli_fetch_assoc($select_edit_courses)){
                            $module_code=$row['module_code'];
                            $module_name=$row['module_name'];
                            $yr = $row["yr"];
                            $dept = $row["dept_ID"];
                            
                            ?>
                            <h2 id="edit">Edit course</h2>
                           <form action="#" method="post">
                        <div class="col-sm-3">
                            <input type="text" name="m_code" value="<?php if(isset($module_code)){echo $module_code;} ?>">
                            <span class="err"><?php echo $codeErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="m_name" value="<?php if(isset($module_name)){echo $module_name;} ?>">
                            <span class="err"><?php echo $nameErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="m_yr" value="<?php if(isset($yr)){echo $yr;} ?>">
                            <span class="err"><?php echo $yrErr;?></span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="m_dept" value="<?php if(isset($dept)){echo $dept;} ?>"><br>
                            <span class="err"><?php echo $deptErr;?></span>
                        </div>
                        <input type="submit" name="update" value="Update course">
                    </form>
                            
                             
                              <?php 
                        }
                    }
                    ?>