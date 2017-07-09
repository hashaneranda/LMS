<?php 
                $codeErr=$nameErr=$yrErr=$deptErr="";
                $m_code=$l_username=$m_yr=$m_dept="";
                
                if(isset($_POST['submit'])){
                    
                    
                    
                    if($_POST['m_code'] =="" || empty($_POST['m_code'])){
                        $codeErr="* module code is required";
                    }else{
                        $m_code=$_POST['m_code'];
                    }
                    
                    if($_POST['m_name'] =="" || empty($_POST['m_name'])){
                        $nameErr="* module name is required";
                    }else{
                        $l_username=$_POST['m_name'];
                    }
                    if($_POST['m_yr'] =="" || empty($_POST['m_yr'])){
                        $yrErr="* module year is required";
                    }else{
                        $m_yr=$_POST['m_yr'];
                    }
                    if($_POST['m_dept'] =="" || empty($_POST['m_dept'])){
                        $deptErr="* module department is required";
                    }
                    else{
                        $m_dept=$_POST['m_dept'];
                    }
                    if($_POST['m_dept']!="SOC" && $_POST['m_dept']!="SOB" && $_POST['m_dept']!="SOE"){
                        $deptErr="Invalid department name";
                    }else{
                    
                  $query ="Insert into courses(module_code,module_name,yr,dept_ID)";
                    $query .="values('{$m_code}','{$l_username}','{$m_yr}','{$m_dept}')";
                    
                    $create_caourse_query=mysqli_query($connection,$query);
                        if($m_dept=='SOC'){ mkdir("../website/uploads/SOC/$l_username", 0700);  }
                        else if($m_dept=='SOB'){ mkdir("../website/uploads/SOB/$l_username", 0700);  }
                        else{   mkdir("../website/uploads/$l_username", 0700);  }
                    if(!$create_caourse_query){
                        die('QUERY FAILED'.mysqli_error($connection));
                    }
                        
                    }
                }
                
                ?>