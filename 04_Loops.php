<?php 
    
    $characters = ['mario','yoshi','peach'];


    // For
    for($i=0; $i<count($characters); $i++){
        echo $characters[$i] .' ';       // mario yoshi peach
    }
    echo '<br>';

// Foreach
    foreach($characters as $character){
        echo $character . ' ';           // mario yoshi peach
    }
    echo '<br>';

        $products = [
		    ['name' => 'shiny star', 'price' => 20],
		    ['name' => 'green shell', 'price' => 10],
		    ['name' => 'red shell', 'price' => 15],
		    ['name' => 'gold coin', 'price' => 5],
		    ['name' => 'lightning bolt', 'price' => 40],
		    ['name' => 'banana skin', 'price' => 2]
	    ];

       foreach($products as $product){
           echo $product['name'] . ' - ' . $product['price'];   // shiny star - 20
           echo '<br>';                                         // green shell - 10
       }                                                        // red shell - 15
                                                                // gold coin - 5
                                                                // lightning bolt - 40
                                                                // banana skin - 2
    
       $i = 0;
    
    // While
        while($i < count($products)){
            echo $products[$i]['name']; // shiny star
            echo '<br>';                // green shell
            $i++;                       // red shell 
                                        // gold coin
                                        // lightning bolt 
                                        // banana skin
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
        <?php foreach($products as $product){ ?>
        
        <h3><?php echo $product['name']; ?></h3>
        <p> $ <?php echo $product['price']; ?></p>

        <?php } ?>
        </ul>
     
    </body>
</html>


