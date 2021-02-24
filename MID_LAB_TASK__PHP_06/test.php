<?php 
    if (isset($_POST['submit'])){
     
        $ImageFile = basename($_FILES["Image"]["name"]);
        $imageExtensions = strtolower(pathinfo($ImageFile,PATHINFO_EXTENSION));
        $allowedEXT = array('jpeg', 'png', 'jpg');
        
        if (!in_array($imageExtensions, $allowedEXT)) {
            echo "Please Upload jpg,jpeg or png files.";
        }
        else{
            if ($_FILES["Image"]["size"] > 4194304) {
                echo "!!!Limit Exceeded!!!!";
                echo" Picture size can not be more than 4MB";
              }
              else{
                  echo"Image uploaded !!";
             }
        }
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
</head>
<body>
        <fieldset style="width: 400px">
            <legend><b>Profile Picture</b></legend>
            <form action="" method="post" enctype="multipart/form-data">
                <img src="images.png" height="150px" height="155px" alt=""><br>
                <input type="file" name="Image" id="Image"><br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </form>
        </fieldset>   
</body>
</html>