
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
        
            // This is a single-line comment
            # This is also a single-line comment
            
            /*
            This is a multiple-lines comment block
            that spans over multiple
            lines
            */

            // You can also use comments to leave out parts of a code line
            $x = 5 /* + 15 */ + 5;
            echo $x;

        ?>
    </body>
</html>