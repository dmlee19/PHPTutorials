<?php 
    // Connect to database
    $connection = mysqli_connect('localhost', 'ldmmysql', 'sql123', 'mario_pizza');
    
    // Check connection
    if(!$connection){//if($connection) --> 연결되면 true
        echo 'Connect error: ' . mysqli_connect_error();
    }                           // connection에 문제있는 경우 error 출력

    // Write sql for all pizzas
    $sql = 'SELECT id, title, ingredients, email FROM pizzas ORDER BY created_at';

    // Make query & get result
    $result = mysqli_query($connection, $sql);

    // Fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); //associated array로 저장
    // print_r($pizzas); // $pizzas array 확인

    // Free result from memory
    mysqli_free_result($result);

    // Close connection 
    mysqli_close($connection);

?>

<!DOCTYPE html>
<html>
    <!-- Header -->
    <?php include('PizzaProject_Templates/PizzaProject_Header.php') ?>

    <h4 class="center grey-text">Pizzas!</h4>
        <div class="container">
            <div class="row">
                <?php foreach($pizzas as $pizza){ ?>
                    <div class="col s6 md3">
                        <div class="card z-depth-0">
                            <div class="card-content center">
                                <h6><?php echo htmlspecialchars($pizza['title']) ?></h6>
                                <ul> 
                                    <!-- ,로 구분된 각 재료를 배열로 구성한 후 각자 출력 -->
                                    <?php foreach(explode(',', $pizza['ingredients']) as $ingredient){ ?>
                                        <li><?php echo htmlspecialchars($ingredient) ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="card-action right-align">
                                <a href="#" class="brand-text">More Info</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    <!-- Footer -->
    <?php include('PizzaProject_Templates/PizzaProject_Footer.php') ?>

</html>