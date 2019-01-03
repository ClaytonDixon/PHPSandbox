<?php
    // Single line comment
    # Single line comment
    /*
        Multi line comment
    */

    #Variable rules
    /*
        -Prefix with a $
        -Start with a letter or an underscore
        -Only letters, numbers, and underscores
        -Case sensitive
    */

    #Data types
    /*
        -Strings
        -Integers
        -floats/aka decimals
        -booleans true or false
        -arrays
        -Objects
        -null
        -resource
    */

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 .' '. $string2;
    $greeting2 = "$string1 $string2";

    $string3 = "They're Here";

    define('GREETING', 'HELLO EVERYONE', true); /* The true here makes it case insensitive so the echo GREETING can be GREETING or greeting and still return the same thing. The define() creates a constant which means the variable will never change. The first word in the () is the name of the constant and the second input after , is the text being output. */

    $output = 'Hello World';
    echo GREETING;
?>