<?php
    //extract the values
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op  = $_GET['operation'];

    // perform action being requested
    if ($op == 'plus') {
        print $num1;
        print "+";
        print $num2;
        print "=";
        print $num1 + $num2     ;
    }

?>