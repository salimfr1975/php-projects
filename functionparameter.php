<?php
    
    function sum($a, $b, $c, $d, $e)
    {
        $total = $a + $b + $c +$d + $e;

        return $total;
    }

    $response = sum(75,82,95,99,76);
    $percentage = $response/5;

    echo "<table align='center' 
        style='width:400px; 
        background-color:lightblue' 
        border='1' cellpadding='10px'>";
    
    echo "<tr style='background-color:blue'>
        <td>Matiére</td>
        <td style='text-align:center'>
        Marks</td></tr>";
        
    echo "<tr><td>Francaise</td>
        <td style='text-align:center'>
        75</td></tr>";
    
    echo "<tr><td>Anglais</td>
        <td style='text-align:center'>
        82</td></tr>";

    echo "<tr><td>Spanish</td>
        <td style='text-align:center'>
        95</td></tr>";
    
    echo "<tr><td>Maths</td>
    <td style='text-align:center'>
    99</td></tr>";
    
    echo "<tr><td>Science</td>
    <td style='text-align:center'>
    76</td></tr>";
    
    echo "<tr style='background-color:blue'>
    <td>Total</td>
    <td style='text-align:center'>
    $response</td></tr>";
    
    echo "<tr style='background-color:gold'>
    <td>Percentage</td>
    <td style='text-align:center'>$percentage</td></tr>";

    echo "</total>";

?>