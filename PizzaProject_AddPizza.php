<?php 
    // GET vs POST method
    // GET: URL을 통해서 DATA를 전송 (보안에 취약)
    // POST: Request memory에 저장되서 전송

    // GET

        // Check data sent isset (최초 접속인지 정보 입력 후 접속인지)
        // if(isset($_GET['submit'])){ // submit의 value가 있는지 없는지 확인 
        //     echo $_GET['email'];
        //     echo $_GET['title'];
        //     echo $_GET['ingredients'];
        // }
    
    // POST
        
        if(isset($_POST['submit'])){ // submit의 value가 있는지 없는지 확인 
            echo htmlspecialchars($_POST['email']);
            echo htmlspecialchars($_POST['title']);
            echo htmlspecialchars($_POST['ingredients']);
        }   
            // htmlspecialchars
            // scurity issue (when someone put script code in input space)
            // avoid cross site scripting(xxs)

?>

<!DOCTYPE html>
<html>

<?php include('PizzaProject_Templates/PizzaProject_Header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class = "white" action="PizzaProject_AddPizza.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email"> 
        <label>Pizza Title:</label>
        <input type="text" name="title"> 
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div> 
    </form>
</section>

<?php include('PizzaProject_Templates/PizzaProject_Footer.php') ?>

</html>