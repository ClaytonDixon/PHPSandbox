<?php
    #A function is a block of code that can be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()
    */
    //Creat simple function
    function simpleFunction(){
        echo 'Hello World';

    }
    //Run Simple function
    //simpleFunction();

    // Function with parameters
    //$name = '' sets it to a default if you don't put anything in the ()
    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }


    //sayHello('Joe');
    //sayHello('Bob');
    //sayHello('Tim');

    // Return value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    //echo addNumbers(2,3);

    // Passing argument by reference

    $myNum = 10;

    function addFive($num){
        // These two are the same thing
        $num += 5; /*$num = $num + 5*/
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";
    addTen($myNum);
    echo "Value: $myNum<br>";
?>