<?php 
    include('config/DBconnection.php');
    //check GET request id parameter
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);        
        // make sql
        $sql = "SELECT title, ingredients, email, created_at FROM pizzas WHERE id = $id";

        // get the query result 
        $result = mysqli_query($conn, $sql);

        //fetch result in array format
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        // print_r($pizza);
    }

?>

<!DOCTYPE html>
<html>
    <!-- Header -->
    <?php include('PizzaProject_Templates/PizzaProject_Header.php') ?>

    <h2 class="center grey-text">Details</h2>
    <div class="container center">
        <?php if($pizza): ?>
            <h4><?php echo htmlspecialchars($pizza['title']) ?></h4>
            <p>Created by <?php echo htmlspecialchars($pizza['email']) ?> </p>
            <p><?php echo date($pizza['created_at']) ?></p>
            <p>Ingredients</p>
            <p><?php echo htmlspecialchars($pizza['ingredients']) ?></p>
        <?php else: ?>
            <h5>No such pizza exists!</h5>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include('PizzaProject_Templates/PizzaProject_Footer.php') ?>

</html>


