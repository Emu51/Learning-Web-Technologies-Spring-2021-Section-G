  
<?php


$rows = 3;

for ($i = 1; $i <= $rows; ++$i) {
   for ($j = 1; $j <= $i; ++$j) {
      echo "*";
   }
   echo "<br>";
}




    $rows = 3;
    for ($i = $rows; $i >= 1; --$i) {
       for ($j = 1; $j <= $i; ++$j) {
          echo $j;
       }
       echo "<br>";
    }





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