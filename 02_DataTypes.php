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

    // Booleans

        // Comparisons booleans (true or false)
            echo true; // result "1"
            echo false; // result "" (none(empty))
    
        // Numbers
            echo 5 < 10; // "1" --> ture
            echo 5 >10; // ""  --> false
            echo 5 == 10; // "" 
            echo 10 == 10; // "1"
            echo 5 !=10; // "1"
            echo 5 <= 5; // "1"
            echo 5 >= 5; // "1"

        // Strings
            echo 'shuan' < 'yoshi'; // "1" order of Alphabet (s<y)
            echo 'shuan' > 'yoshi'; // ""  
            echo 'shuan' > 'Shaun'; // "1" Lowercase one is greater than Uppercase Letter (s>S)
            echo 'mario' == 'Mario'; // "" (m != M)  

        // Loose vs Strict equal comparisons
            echo 5 == '5'; // "1" loose comparison doesn't care type of data 
            echo 5 ==='5'; // "" strict comparison takes into consideration type of data
            echo 5 === 5; // "1" 
            echo '5' === '5'; // "1"
            echo true == "1"; // "1"
            echo false == ""; // "1"
            echo true === "1"; // ""
            echo false === ""; // ""

?>
