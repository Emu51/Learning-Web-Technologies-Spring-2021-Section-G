<?php
if (isset($_POST["submit"])) {
    
    $fileinfo = $_FILES["file"]["tmp_name"];

    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    
    $file_extension =$_FILES["file"]["type"];
    
    
    if (! file_exists($_FILES["file"]["tmp_name"])) {
        echo "Please upload a file";
        ;
    }    
    else if (! in_array($file_extension, $allowed_image_extension)) {
                echo "the file is in correct format";
        
    }    
    else if (($_FILES["file"]["size"] > 4000000)) {
                echo "upload a picture less than 4mb size";;
    }
    else {
        echo "picture upload successfull";
    }    

}
?>
  
<html>
<head>
    <title>Profile pic</title>
</head>
<body>

    <form method="POST" action="#">
        <fieldset>
            <legend>Profile Picture</legend>

            <table >


                <tr>
                    <td>Picture : <img src="user.png"> </td>
                    <td>  
                        <input type="file" name="image" value="">
                    </td>
                </tr>
            </table>        
        </fieldset>

                        <p align="left">
                        <input type="Submit" name="click" value="upload"> 
                        </p>

</body>
</html> 