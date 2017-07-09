<?php   include "../php/db.php";    ?>
<?php session_start(); ?>
<?php if(isset($_GET['mod_code'])){
    $modCode=$_GET['mod_code'];
    $modName=$_GET['mod_name'];
    $dept=$_GET['dept'];
} 


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/png" />
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <title>
        <?php echo $modName ?>
    </title>
</head>

        <?php   include "./includes/nav_courses.php";    ?>
        <?php
    if(!isset($_SESSION['user_role'])){ header("Location: login.php");   }
    

?>
        <div class="container courseTitle">
            <h1><?php   echo"<b>{$modCode}</b> - {$modName}"    ?></h1>
        </div>
        <div class="container course_content">
            <table>
                <tbody>
                    <?php
                    
                        $dir    = "./uploads/$dept/$modName";
                        $files = array_slice(scandir($dir), 2);
                        foreach($files as $value){
                            echo "<tr>";
                            echo "<td><a href='{$dir}/{$value}'>{$value}</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>

        </div>
        
        <footer>
        <div class="copyrightFooter">
            <p>NSBM LMS , Copyright &copy; 2017</p>
            </div>
        </footer>

    </body>

    </html>    

