<!DOCTYPE html>
<html>
<body>

<?php
    $abcGetallen = [['a', 'b', 'c'], 24,56,78,90];

    print_r($abcGetallen);
    $br="<br>"; echo $br; echo $br;
    echo $abcGetallen[0][0] . $abcGetallen[2];
    echo $br;
    echo $abcGetallen[0][2] . $abcGetallen[4];
?>

</body>
</html> 