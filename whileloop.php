<?php
    $x =1;
    $y =5;
    echo "<table border='1'>";
    while($x <= 5)
    {
        if($x == 1)
        {
            echo "<tr><td style='background-color:red'>$x</td><td style='background-color:tan'>$y</td></tr>";
        }
        if($x == 2)
        {
            echo "<tr><td style='background-color:blue'>$x</td><td style='background-color:orange'>$y</td></tr>";
        }
        if($x == 3)
        {
            echo "<tr><td style='background-color:green'>$x</td><td style='background-color:green'>$y</td></tr>";
        }
        if($x == 4)
        {
            echo "<tr><td style='background-color:orange'>$x</td><td style='background-color:blue'>$y</td></tr>";
        }
        if($x == 5)
        {
            echo "<tr><td style='background-color:tan'>$x</td><td style='background-color:red'>$y</td></tr>";
        }
        $x++;
        $y--;
    }
    echo "</table>"
?>