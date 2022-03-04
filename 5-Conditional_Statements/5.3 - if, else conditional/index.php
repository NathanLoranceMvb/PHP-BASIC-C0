<!DOCTYPE html>
<html>
<body>

<?php

    $test1 = 10;
    $test2 = 6;
    if($test1 == $test2){ 
        echo "gelijk";
    }else{
        echo "niet gelijk";
    }
    echo"<br><br>";

    if($test1 != $test2){ 
        echo "ongelijk"; 
    }else{
        echo "neit ongelijk";
    }
    echo "<br><br>";

    if($test1 === $test2){ 
        echo "identiek";
    }else{
        echo "niet identiek";
    }    
    echo "<br><br>";

    if($test1 > $test2){ 
        echo "test1 is groter dan test2";
    }else{
        echo "test1 is niet groter dan test2";
    }     
    echo "<br><br>";

    if($test1 < $test2){ 
        echo "test1 is kleiner dan test2";
    }else{
        echo "test1 is niet kleiner dan test2";
    } 
    echo "<br><br>";

    if($test1 >= $test2){ 
        echo "test1 is groter of gelijk aan test2"; 
    }else{
        echo "test1 is niet groter of gelijk aan test2";
    }
    echo "<br><br>";
    
    if($test1 <= $test2){ 
        echo "test1 is kleiner of gelijk aan test2";
    }else{
        echo "test1 is niet kleiner of gelijk aan test2";
    } 
?>

</body>
</html> 