<?php 
    
    // Session 
    // 서버에 저장되어 서로 다른 페이지에서 사용

    if(isset($_POST['submit'])){
        session_start();

        $_SESSION['name'] = $_POST['name'];

        // echo $_SESSION['name']; // input data

        header('Location: PizzaProject_Main.php');
        //Project 메인 페이지로 이동
    }
   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <input type="text" name="name">
            <input type="submit" name="submit" value="submit">
        </form>
     
    </body>
</html>


