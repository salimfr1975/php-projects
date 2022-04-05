<?php
    $per = 75;
    if($per >= 80 && $per <= 100)
    {   
        echo "<h1>Merit</h1>";      
    }
    elseif($per >= 60 && $per <= 79)
    {   
        echo "<h1>Ist Divison</h1>";    
    }
    elseif($per >= 45 && $per <= 59)
    {   
        echo "<h1>IInd Division</h1>";  
    }
    elseif($per >= 33 && $per <= 44)
    {   
        echo "<h1>IIIrd Division</h1>"; 
    }
    elseif($per >= 0 && $per <= 32)
    {   
        echo "<h1>Fail</h1>";   
    }
    else
    {   
        echo "<h1>Entrer le numéro valide.</h1>";   
    }
   
?>



