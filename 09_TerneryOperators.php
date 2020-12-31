<?php 

    $score = 50;
    
    //If
    if($score >40){
        echo 'high score!';
    } else {
        echo 'low score :(';
    }
        // result: high score!
    
    
    // Ternaty Operators: alternative If statement
    $val = $score > 40 ? 'high score !' : 'low score :(';
    echo $val;
        // result: high score!

    echo $score > 40 ? 'high score !' : 'low score :(';
        // result: high score!
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <!-- html에서 사용할 떄 더 깔끔하게 작성 가능 -->
        <p><?php echo $score > 40 ? 'high score !' : 'low score :('; ?></p> 
    </body>
</html>