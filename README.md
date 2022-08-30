## W3S : [Learning-PHP](https://www.w3schools.com/php/default.asp)

[![image](https://user-images.githubusercontent.com/50515418/187360720-838dd49c-2796-49e1-94fe-a5b19cf9c839.png)](https://www.w3schools.com/php/php_variables_scope.asp)

# >>> PHP [Compatibility](https://github.com/PHPCompatibility/PHPCompatibility)

`PHPCompatibility-9.3.5`

    Step1- Download zip file of PHP Compatibility
    Step2- Place the PHP Compatibility folder in C:\xampp\php\pear\PHP\CodeSniffer\Standards and in C:\xampp\php
    Step3- Config the path using php phpcs.phar --config-set installed_paths C:\xampp\php\PHPCompatibility-9.3.5\PHPCompatibility 
    Step4- Check the standard using php phpcs.phar -i 
    Step5- Use the standard using php phpcs.phar -p . --standard=PHPCompatibility 
    Step6- Run the file using >php phpcs.phar --standard=PHPCompatibility --runtime-set testVersion 8.2 PATH_OF_FILE

### Getting Error...

    C:\xampp\php>php phpcs.phar --standard=PHPCompatibility --runtime-set testVersion 8.2 C:\xampp\htdocs\phptest

        FILE: C:\xampp\htdocs\phptest\index.php
        ----------------------------------------------------------------------
        FOUND 1 ERROR AFFECTING 1 LINE
        ----------------------------------------------------------------------
         32 | ERROR | Function split() is deprecated since PHP 5.3 and
            |       | removed since PHP 7.0; Use preg_split() instead
        ----------------------------------------------------------------------

        Time: 133ms; Memory: 10MB
    
-----------------------

### No Error... (check @ folder or file Level)

    C:\xampp\php>php phpcs.phar --standard=PHPCompatibility --runtime-set testVersion 3.2 C:\xampp\htdocs\phptest\Learning-PHP\phptest
    
    C:\xampp\php>php phpcs.phar --standard=PHPCompatibility --runtime-set testVersion 8.2 C:\xampp\htdocs\phptest\hello.php
    
-----------------------

![image](https://user-images.githubusercontent.com/50515418/187362505-0c6ec65a-3f80-422c-be7b-fea5deb205a5.png)


