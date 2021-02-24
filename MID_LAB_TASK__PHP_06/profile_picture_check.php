<?php
if (isset($_POST["submit"])) {
    
    $fileinfo = $_FILES["Image"]["name"];

    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    
    $file_extension =$_FILES["Image"]["type"];
    
    
    if (! file_exists($_FILES["Image"]["name"])) {
        echo "Please upload a file";
        ;
    }    
    else if (! in_array($file_extension, $allowed_image_extension)) {
                echo "the file is in correct format";
        
    }    
    else if ($_FILES["Image"]["size"]/1000 > 4000) {
                echo "upload a picture less than 4mb size";;
    }
    else {
        echo "picture upload successfull";
    }    

}
?>