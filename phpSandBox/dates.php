<?php
    //echo date('d'); // Gives the Day
    //echo date('m'); //Gives the month
    //echo date ('Y');  // Gives the year
    //echo date ('l'); //Gives day of the week

    //echo date('Y/m/d');
    //echo date('m/d/Y');
    //echo date('i'); minute
    //echo date ('s'); Seconds
    //echo date ('a'); AM or PM

    //Set Time Zone

    date_default_timezone_set('America/New_York');
    
    //echo date('h:i:sa');

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    //echo($timestamp);

    //echo date('m/d/Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Months');
    $timestamp6 = strtotime('+2 Days');
    //echo($timestamp2);

    echo date('m/d/Y h:i:sa', $timestamp6);
?>