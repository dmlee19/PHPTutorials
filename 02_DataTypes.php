<?php 
    
    //Strings

        // $stringOne = 'my email is @[]asdf123!@#'; 문자열, 숫자, 특수문자 모두 사용 가능
        $stringOne = 'my email is ' ;
        $stringTwo = 'Mario123@PHPtutorial.com';

        echo $stringOne . $stringTwo . '<br>';  // 'my email is Mario123@PHPtutorial.com
   
        $name = 'Mario';

    // "" vs ''
        // 변수 사용    
            // "" --> 변수 자동 인식
            echo "Hey, my name is $name" . '<br>'; // Hey, my name is Mario
            // '' --> 변수 인식 X
            echo 'Hey, my name is ' . $name . '<br>'; // Hey, my name is Mario
        // "" 출력
            // ""  
            echo "The Mario screamed \"whaaaaa\"" . '<br>'; // The Mario screamed "whaaaaa"
            // '' 
            echo 'The Yoshi screamed "whaaaaa"' . '<br>';   // The Yoshi screamed "whaaaaa"

    // The first character 
        
        echo $name[0] . '<br>';     // M

    // length of string

        echo strlen($name) . '<br>';    // 5

    // string function
     
        echo strtoupper($name) . '<br>';            // MARIO
        echo strtolower($name) . '<br>';            // mario
        echo str_replace('M','w',$name) . '<br>';   // wario

    //Numbers

        $radius = 25; //Integer
        $pi = 3.14; //float or double

   
    //basic *, /, +, -, **,

        echo $pi * $radius**2 . '<br>'; // 1962.5

   
    // order of operation (B() I** D/ M* A+ S-)
    
        echo 2 * (4 + 9) / 3 . '<br>';  //8.666667
    
    // increment & derement operations
     
        echo $radius++ . '<br>';    // 25
        echo $radius . '<br>';      // 26
        echo $radius-- . '<br>';    // 26
        echo $radius . '<br>';      // 25

    // shorthand operation
        
        $age = 20;
        $age += 10;
        echo $age . '<br>'; // 30
        
        $age = 20;
        $age -= 10;
        echo $age . '<br>'; // 10

        $age = 20;
        $age *= 2;
        echo $age . '<br>'; // 40

    // number functions

        echo floor($pi) . '<br>';   // 3
        echo ceil($pi) . '<br>';    // 4
        echo pi() . '<br>';         // 3.1415

?>
