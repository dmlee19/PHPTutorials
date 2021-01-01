<?php 
    include('config/ConnectDB.php');
    
    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($connection, $_POST['id_to_delete']);

        // make sql
        $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

        if(mysqli_query($connection, $sql)){
            // success
            header('Location: PizzaProject_Main.php');
        } else{
            // failure
            echo 'query error: '. mysqli_error($connection);
        }
    }
    //check GET request id parameter
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($connection, $_GET['id']);        
        // make sql
        $sql = "SELECT id, title, ingredients, email, created_at FROM pizzas WHERE id = $id";

        // get the query result 
        $result = mysqli_query($connection, $sql);

        //fetch result in array format
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($connection);

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

            <!-- Delete Form -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>"> 
                <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
            </form>
        <?php else: ?>
            <h5>No such pizza exists!</h5>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include('PizzaProject_Templates/PizzaProject_Footer.php') ?>

</html>


