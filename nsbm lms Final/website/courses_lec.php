<?php   include "../php/db.php";    ?>
<?php session_start(); ?>
<?php if(isset($_GET['mod_code'])){
    $modCode=$_GET['mod_code'];
    $modName=$_GET['mod_name'];
    $dept=$_GET['dept'];
} 


?>
<?php
if(!isset($_SESSION['user_role'])){ header("Location: login.php");   }
    if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role']!=='lecturer'){    header("Location: ../website/login.php");   }
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

        <title>
            <?php echo $modName ?>
        </title>
    </head>

    <?php   include "./includes/nav_courses.php";    ?>
    <div class="container courseTitle">
        <h1>
            <?php   echo"<b>{$modCode}</b> - {$modName}"    ?></h1>
    </div>

    <div class="container course_upload">
        <h2>Add content</h2>
        <form action="" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload file" name="submit">
        </form>

        <?php
            $target_dir = "uploads/$dept/$modName/";
            // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
            echo '<pre>';
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                echo "File is valid, and was successfully uploaded.\n";
            }else {
                echo "File upload Failed!\n";
            }
        }
        ?>

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
                            echo "<td><a href='courses_lec.php?delete={$value}&mod_name={$modName}&dept={$dept}&mod_code={$modCode}' class='delete'>Delete</a></td>";
                            echo "</tr>";
                        }
                    ?>
            </tbody>
        </table>
        <?php 
            if(isset($_GET['delete'])){
                $file=$_GET['delete'];
                $modName=$_GET['mod_name'];
                $dept=$_GET['dept'];
                $modCode=$_GET['mod_code'];
                $dirFile="./uploads/$dept/$modName/$file";
                unlink($dirFile);
                
            }
            ?>

    </div>

    <footer>
        <div class="copyrightFooter">
            <p>NSBM LMS , Copyright &copy; 2017</p>
        </div>
    </footer>

    </body>

    </html>
