<?php 


    $characterCode = "c";
    $result;

    // Switch
        switch($characterCode){
            case "a":
                $result = "your character is Mario";
                break;
            case "b":
                $result = "your character is Luigi";
                break;
            case "c":
                $result = "your character is Yoshi";
                break;
            case "d":
                $result = "your character is Peach";
                break;
            case "e":
                $result = "your character is Toad";
                break;
            default:
                $result = "the code is not valied";
                break;
        }
        
        echo $result;   // your character is Yoshi

    // Break vs Continue 
        $products = [
            ['name' => 'shiny star', 'price' => 20],
            ['name' => 'green shell', 'price' => 10],
            ['name' => 'red shell', 'price' => 15],
            ['name' => 'gold coin', 'price' => 5],
            ['name' => 'lightning bolt', 'price' => 40],
            ['name' => 'banana skin', 'price' => 2]
        ];
    
        foreach($products as $product){
        
            // Break --> 해당 부분에서 반복분 중단
            if($product['name'] === 'lightning bolt'){
                break;
            }
            // Continue --> 이 후 코드는 실행하지 않고 다음 반복분 시작
            if($product['price'] > 15){
                continue;                   // shiny star --> continue (출력 X)
            }
            echo $product['name'] . '<br>'; // green shell
                                            // red shell
                                            // gold coin
        } 
?>