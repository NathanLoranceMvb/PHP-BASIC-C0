<!DOCTYPE html>
<html>
<body>

<?php
    $test1 = 12;
    $test2 = "gewoon tekst";
    var_dump($test1 == $test2);

    $br="<br>"; echo $br;
    var_dump($test1 === $test2);

    echo $br;
    var_dump($test1 != $test2);
    
    echo $br;
    var_dump($test1 > $test2);
    
    echo $br;
    var_dump($test1 < $test2);
    
    echo $br;
    var_dump($test1 <> $test2);
    
    echo $br;
    var_dump($test1 >= $test2);
    
    echo $br;
    var_dump($test1 <= $test2);

     //<=> spaceship    
?>

</body>
</html> 