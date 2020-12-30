<?php 
    
    // Indexed Arrays
       
        $peopleOne = ['shaun','crystal','ryu'];
        echo $peopleOne[1] . '<br>';        // crystal

        $peopleTwo = array('ken','chun-li');
        echo $peopleTwo[1] . '<br>';        // chun-li

        $ages = [20, 30, 40, 50];
        // echo $ages;  // error --> 하나의 값만 출력 가능
        // print_readable 배열 전체 출력 가능
        print_r($ages);             // Array ( [0] => 20 [1] => 30 [2] => 40 [3] => 50 )
        echo '<br>';  
        $ages[1] = 25;
        print_r($ages);             // Array ( [0] => 20 [1] => 25 [2] => 40 [3] => 50 )
        echo '<br>'; 

        $ages[] = 60;
        print_r($ages);             // Array ( [0] => 20 [1] => 25 [2] => 40 [3] => 50 [4] => 60 )
        echo '<br>'; 

        array_push($ages , 70);
        print_r($ages);             // Array ( [0] => 20 [1] => 25 [2] => 40 [3] => 50 [4] => 60 [5] => 70 )
        echo '<br>'; 
        echo count($ages) . '<br>'; // 6

        $peopleThree = array_merge($peopleOne, $peopleTwo);
        // print_r($peopleThree);

    // Associative Arrays (key & value pairs)
        
        $beltColorOne = ['shaun'=>'black','mario'=>'orange','luigi'=>'brown'];
        echo $beltColorOne['mario'] . '<br>';   // orange
        print_r($beltColorOne);                 // Array ( [shaun] => black [mario] => orange [luigi] => brown )
        echo '<br>'; 

        $beltColorTwo = ['brown'=>'green','peach'=>'yellow'];
        echo $beltColorTwo['brown'] . '<br>';   // green
        print_r($beltColorTwo);                 // Array ( [brown] => green [peach] => yellow )
        echo '<br>'; 

        $beltColorTwo['toad'] = 'pink';
        print_r($beltColorTwo);         // Array ( [brown] => green [peach] => yellow [toad] => pink )
        echo '<br>'; 
        $beltColorTwo['peach'] = 'pink';
        print_r($beltColorTwo);         // Array ( [brown] => green [peach] => pink [toad] => pink )
        echo '<br>'; 

        echo count($beltColorOne) . '<br>'; // 3

        $beltColorThree = array_merge($beltColorOne, $beltColorTwo);
        print_r($beltColorThree);            // Array ( [shaun] => black [mario] => orange [luigi] => brown [brown] => green [peach] => pink [toad] => pink )
        echo '<br>'; 


    // Multi Dimensional Arrays

        $blogsOne = [
            //title, author, content, likes
            ['mario party','mario','lorem',30],
            ['mario cart cheats','toad','lorem',25],
            ['gelda hiiden cheats', 'link','lorem',50]
        ];
    
        print_r($blogsOne);
        echo '<br>'; 
        print_r($blogsOne[1]);  //  ['mario cart cheats','toad','lorem',25]
        echo '<br>'; 
        echo($blogsOne[1][1]) . '<br>'; //toad 
    
        $blogsTwo = [       
            ['title'=>'mario party','author'=>'mario','content'=>'lorem','likes'=>30],
            ['title'=>'mario cart cheats','author'=>'toad','content'=>'lorem','likes'=>25],
            ['title'=>'gelda hiiden cheats', 'author'=>'link','content'=>'lorem','likes'=>50]
        ];
    
          echo($blogsTwo[2]['author']) . '<br>'; //link
          echo count($blogsTwo) . '<br>'; //3
          $blogsTwo[] = ['title'=>'castle party','author'=>'peach', 'content'=> 'lorem','likes'=>100];
          print_r($blogsTwo);
          echo '<br>'; 
    
          $popped = array_pop($blogsTwo); //last element in this array
          print_r($popped); // = print_r($blogs[3]) castle party .....
          echo '<br>'; 

?>