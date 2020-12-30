<?php 
    
    $price = 20;
    $message = 'the condition is not met';

    if ($price < 10){
       $message = 'the condition is met';
    } else if ($price < 30) {
        $message = 'else if condition is met';
    }
    echo $message;  // else if condition is met

    
    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    foreach($products as $product){

        if($product['price'] < 15 && $product['price'] > 2){
            echo $product['name'] . '<br>';
        }                                                   // gold coin
        
        if($product['price'] > 20 || $product['price'] < 10){
            echo $product['name'] . '<br>';
        }                                                   // gold coin
    }                                                       // lightening bolt
                                                            // banana skin
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <div>
            <ul>
                <?php foreach($products as $product){
                    if($product['price'] > 15){ ?>
                        <li><?php echo $product['name']; ?></li>
                    <?php }
                } ?>
            </ul>
        </div>  
    </body>
</html>
