<?php

    $j = 'A';

    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            $ch = chr($j);
            echo $ch." ";
        }
        echo "<br>";
    }

?>