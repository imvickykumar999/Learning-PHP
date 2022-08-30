# W3S : [Learning-PHP](https://www.w3schools.com/php/default.asp)

-----------------------------

[![image](https://user-images.githubusercontent.com/50515418/187360720-838dd49c-2796-49e1-94fe-a5b19cf9c839.png)](https://www.w3schools.com/php/php_variables_scope.asp)

## >>> PHP [Compatibility](https://github.com/PHPCompatibility/PHPCompatibility)

### Getting Error...

    C:\xampp\php>php phpcs.phar --standard=PHPCompatibility --runtime-set testVersion 8.2 C:\xampp\htdocs

    FILE: C:\xampp\htdocs\index.php
    ----------------------------------------------------------------------
    FOUND 1 ERROR AFFECTING 1 LINE
    ----------------------------------------------------------------------
     32 | ERROR | Function split() is deprecated since PHP 5.3 and
        |       | removed since PHP 7.0; Use preg_split() instead
    ----------------------------------------------------------------------

    Time: 8.58 secs; Memory: 132MB
    
-----------------------

### No Error...

    C:\xampp\php>php phpcs.phar --standard=PHPCompatibility --runtime-set testVersion 3.2 C:\xampp\htdocs\phptest\Learning-PHP\phptest
    
-----------------------

