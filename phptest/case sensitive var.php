
<!-- Look at the example below; 
only the first statement will display 
the value of the $color variable! 

This is because $color, $COLOR,
and $coLOR are treated as three different variables: 
-->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $color = "red";
            echo "My car is ".$color."<br>";
            echo "My car is ".$COLOR."<br>"; 
            echo "My car is ".$coLoR."<br>"; 
        ?>
    </body>
</html>