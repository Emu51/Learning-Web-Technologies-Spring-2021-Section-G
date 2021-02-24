<?php
if (isset($_POST["submit"])) {
    
   

    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    
    $file_extension =$_FILES["Image"]["type"];
    
    
       
     if (! in_array($file_extension, $allowed_image_extension) ) {
                echo "the file is not in correct format";
        
    }    
    else if ($_FILES["Image"]["size"]/1000 > 4000) {
                echo "upload a picture less than 4mb size";;
    }
    else if ((in_array($file_extension, $allowed_image_extension)) && ($_FILES["Image"]["size"]/1000 < 4000))
        {
        echo "The image is in correct format and size ";
        echo "Profile Picture Uploaded Successfully"; 
        }   

    }
    else    
    {
        echo "picture upload successfull";
    }    


?>