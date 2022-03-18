<html>
<head>
</head>
<body>
<?php  
    $leeftijd = 15;
?>

    <div id="isMeerderJarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h6>Je bent niet 18 of ouder ga weg</h6>";
            }
        ?>
    </div>

</body>
</html>