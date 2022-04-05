<?php
    $a = [
        [55,72,81],
        [58,42,64],
        [28,31,63],
   
    ];
    echo "<table border='1' cellpadding='10px' 
    style='width:500px; background-color:lightblue'>";
    echo "<tr><th style='background-color:blue' colspan='3'>A</th></tr>";
    for($row=0;$row<3;$row++)
    {
        echo "<tr>";
        for($col=0;$col<3;$col++)
        {
            echo "<td><b>" . $a[$row][$col] . "</b></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<table style = 'background-color:yellow;width:500px'><tr><td colspan='3' style='text-align:center'><h1>+</h1></td></tr></table>";
    $b = [
        [3,2,4],
        [7,8,7],
        [4,3,2],
   
    ];
    echo "<table border='1' cellpadding='10px' 
    style='width:500px; background-color:lightblue'>";
    echo "<tr><th style='background-color:blue' colspan='3'>B</th></tr>";
    for($row=0;$row<3;$row++)
    {
        echo "<tr>";
        for($col=0;$col<3;$col++)
        {
            echo "<td>" . $b[$row][$col] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<table style = 'background-color:yellow;width:500px'><tr><td colspan='3' style='text-align:center'><h1>=</h1></td></tr></table>";
    echo "<table border='1' cellpadding='10px' 
    style='width:500px; background-color:lightblue'>";
    echo "<tr><th style='background-color:orange' colspan='3'>C</th></tr>";
    for($row=0;$row<3;$row++)
    {
        echo "<tr>";
        for($col=0;$col<3;$col++)
        {
            $c[$row][$col] = $a[$row][$col] + $b[$row][$col];
            echo "<td>" . $c[$row][$col] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>