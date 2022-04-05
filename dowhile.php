<?php
    $x = 5;
    $y = 1;
    $z = 1;
    echo "<table border='1' 
    cellpadding = '10px' cellspacing='10px'>";
    do
    {
        $z=$x*$y;
        echo "<tr>
                <td>$x</td>
                <td>x</td>
                <td>$y</td>
                <td>=</td>
                <td>$z</td>
            </tr>";
        $y++;
    
    }while($y <= 10);

    echo "</table>";
?>