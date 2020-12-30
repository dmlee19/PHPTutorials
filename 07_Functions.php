<?php 
 
//Functions 

    // Own Function
   
        function sayHello($name = 'shaun', $time = 'morning'){ // 매개변수 없는 경우 defalut 설정 가능
           echo "Good $time $name";
        }

        sayHello('mario');           // Good morning mario
        sayHello('Yoshi','night');   // Good night Yoshi


        function formatProduct($product){
            return "{$product['name']} costs $ {$product['price']} to buy <br>";
            // 대괄호 []를 사용하는 값을 넣을 경우에는 {}안에 넣어야 인식 가능
        }

        $formatted = formatProduct(['name'=>'gold star','price'=>20]);
         echo $formatted;       // gold star costs $ 20 to buy

// Variavble scope

    //Local Variables
    
        function myFunc(){
            $price = 10; // Local scope (Cannot use outside of this function)
            echo $price; // 10
        }

        myFunc();
        // echo $price; // error --> myFunc 내부에서 선언된 변수는 함수 내에서 사용된 후 제거 

        function myFuncTwo($age){
        echo $age;
        };

        myFuncTwo(25);      //25
        //  echo $age;  // error --> 매개변수로 값을 정의하는 경우 (Local scope)


    // Global Variables

        $name = 'Mario';

        function sayHelloAndName(){
            global $name;        // global $name이 없는 경우 $name 사용 X
            $name = 'Yoshi';     // global로 받아왔기 때문에 Global var 수정
            echo "Hello $name";  // Hello Yohshi
        }

        sayHelloAndName();
        echo $name; // Yoshi

        function sayBye(&$name){    // 매개변수 앞 & global과 같은 기능
            $name = 'Luigi';        // &가 없는 경우 Local variable로 인식 --> 함수 밖에서 적용 X
            echo "bye $name";
        }

        sayBye($name);  // bye Luigi
        echo $name;     // Luigi

?>