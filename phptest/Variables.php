<!-- 
https://www.w3schools.com/php/php_variables.asp

PHP Variables
A variable can have a short name (like x and y) or 
a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

    - A variable starts with the $ sign, followed by the name of the variable
    - A variable name must start with a letter or the underscore character
    - A variable name cannot start with a number
    - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variable names are case-sensitive ($age and $AGE are two different variables) 

In PHP 7, type declarations were added. 
This gives an option to specify the data 
type expected when declaring a function, 
and by enabling the strict requirement, 
it will throw a "Fatal Error" on a type mismatch.

-->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $txt1 = 'Hello world!';
            $txt2 = 'Hi there!';
            echo $txt1;
            echo "<br>";
            echo $txt2;
            echo "<br><br>";

            $x = 5;
            $y = 13.5;
            echo $x;
            echo "<br>";
            echo $y;
            echo "<br>";
            echo $x + $y;
            echo "<br><br>";

            $txt = "W3School.com";
            echo "I love $txt!";
            echo "<br>";
            echo "I love ".$txt."!";
        ?>
    </body>
</html>