<?php 
    
    // Session for name
    // 서버에 저장되어 서로 다른 페이지에서 사용

    if(isset($_POST['submit'])){
        session_start();

        $_SESSION['name'] = $_POST['name'];

        // echo $_SESSION['name']; // input data


    //Cookie for gender

        setcookie('gender', $_POST['gender'], time() + 86400);
        // 쿠키 설정, 86400 (24h --> sec)

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
            <select name="gender">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
            <input type="submit" name="submit" value="submit">
        </form>
     
    </body>
</html>