<?php 
    //constants
    
    define('NAME','Yoshi');
    // define('NAME','Mario'); // error 
        // constants 수정 불가

    // variables
    
    $name = "Yoshi"; //String
    $age = 30; //number

    $name = 'Mario';  // variables 수정 가능

    echo $name; // php 에서 바로 출력 가능
    echo $age;  // browser에서 html로 전환
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic</title>
</head>
<body>
    <h1>User Profile Page</h1>
    <div><?php echo NAME; ?></div>
    <div><?php echo $name;?></div>
    <div><?php echo $age; ?></div>
    <!-- html 포맷안에서 php 삽입하여 출력 가능 -->
</body>
</html>