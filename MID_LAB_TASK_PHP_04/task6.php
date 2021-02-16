<?php

    

    $arr = array(1, 2, 3, 5, 7, 8, 9, 100);
    static $flag;
    $search = 3;

    for($i=0; $i<7; $i++)
    {
        if($arr[$i] == 9)
        {
            $flag = true; 
        }

    }


    if($flag)
    {
        echo "Number found";

    }

    else
    {
        echo "Number not found";
    }

?>