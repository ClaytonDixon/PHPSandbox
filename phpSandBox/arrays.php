<?php
    #Array is a variable that holds multiple values
    #Three types of arrays
    /*
        -Indexed
        -Associative
        -Multi-dimensional
    */

    //Indexed
    $people = array('Kevin','Jeremy', 'Sarah');
    $ids = array(23,55,12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Nissan';
    $cars[] = 'BMW';

    //count($cars);

    //print_r($cars);

    //var_dump($cars);
    
    //echo count($cars);
    //echo $cars [4];
    //echo $ids[2];    
    //echo $people[3];


    //Associative Arrays
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    //echo $people['Brad'];
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
    //echo $ids[44];
    $people['Jill'] = 42;
    //echo $people['Jill'];
    //print_r($people);
    //var_dump($people);

    //Multi Dimensional Arrays

    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)
    );

    echo $cars[1][2];
?>