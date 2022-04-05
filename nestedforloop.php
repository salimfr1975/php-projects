<?php
    $c = 1;
    echo "<table border = '1' align='center' 
    width='500px' height='400px' cellpadding='10px' ";
    for($x=1;$x<=100;$x = $x+10)
    {
        echo "<tr>";
        for($y=$x;$y<$x+10;$y++)
        {
            if($c%2 == 0)
            {
            echo "<td style='background-color:blue; 
            text-align:center' >" . $y . "</td>";
            }
            else
            {
                echo "<td style='background-color:lightblue;
                text-align:center' >" . $y . "</td>";
            }
            
            $c++;
         
        }
        echo "</tr>";

    }

    echo "</table>";

?>



