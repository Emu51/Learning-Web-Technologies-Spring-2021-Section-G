<?php 
            $array=[['1','2','3','A'],
                    ['1','2','B','C'],
                    ['1','D','E','F']];

            $l=sizeof($array);
            $n=3;
            for ( $i=0; $i<=$l; $i++)
            {
                for ( $j=0; $j<$n; $j++)
                {
                 echo " ".$array[$i][$j]."";
                }
              $n--;
               
                echo "<br/>";

            }
 
            $m=3;
            $kv=3;
            for ( $p=0; $p<=2; $p++)
            {
                for ( $k=$kv; $k<=$m; $k++)
                {
                 echo " ".$array[$p][$k]."";
                 
                }
                $kv--;
                
              $m++;
               
                echo "<br/>";

            }

            
             
   
           
?>