<?php 
    // Connect to database
    $connection = mysqli_connect('localhost', 'ldmmysql', 'sql123', 'mario_pizza');

    // Check connection
    if(!$connection){//if($connection) --> 연결되면 true
        echo 'Connect error: ' . mysqli_connect_error();
    }                           // connection에 문제있는 경우 error 출력
?>