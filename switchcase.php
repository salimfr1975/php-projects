<?php

    $color = 4;

    switch($color)
    {
        case 1:
            echo "<h1>Rouge</h1>";
            break;
        case 2:
            echo "<h1>C'est Mardi aujourd'hui</h1>";
            break;
        case 3:
            echo "<h1>C'est Mercredi aujourd'hui</h1>";
            break;
        case 4:
            echo "<h1>C'est Jeudi aujourd'hui</h1>";
            break;
        case 5:
            echo "<h1>C'est Vandredi aujourd'hui</h1>";
            break;
        case 6:
            echo "<table border=1>";
                echo "<tr>";
                    echo "<td> 1 </td>";
                    echo "<td> 2 </td>";
                    echo "<td> 3 </td>";
                    echo "<td> 4 </td>";
                    echo "<td> 5 </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td style='background-color:red'>";
                        echo "Rouge";
                    echo "</td>";
                    echo "<td style='background-color:blue'>";
                        echo "Blue";
                    echo "</td>";
                    echo "<td style='background-color:green'>";
                        echo "Verte";
                    echo "</td>";
                    echo "<td style='background-color:orange;'>";
                        echo "Orange";
                    echo "</td>";
                    echo "<td style='background-color:tan;'>";
                        echo "Tan";
                    echo "</td>";
                echo "</tr>";
            echo "</table";
            break;  
        default:
            echo "<h1>Entrer le numéro valide</h1>";
    }

?>