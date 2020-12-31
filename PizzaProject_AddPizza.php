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
    
        $email = $title = $ingredients = ''; 
    // Error message
        $errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

    // POST
        
        if(isset($_POST['submit'])){ // submit의 value가 있는지 없는지 확인 
            // echo htmlspecialchars($_POST['email']);
            // echo htmlspecialchars($_POST['title']);
            // echo htmlspecialchars($_POST['ingredients']);
                     
            // htmlspecialchars
            // scurity issue (when someone put script code in input space)
            // avoid cross site scripting(xxs)
        

        // Check email
            if(empty($_POST['email'])){
                $errors['email'] = 'An email is required <br>'; 
            } else{
                $email = ($_POST['email']);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){         
                                    // 유효한 email 값인지 확인
                    $errors['email'] = 'email must be a vaild email address';
                }
            }
        // Check title    
            if(empty($_POST['title'])){
                $errors['title'] = 'A title is required <br>';
            } else{
                $title = ($_POST['title']);
                if(!preg_match('/^[a-zA-Z\s]+$/',$title)){               
                                // 영문 대,소문자, 띄어쓰기만 허용
                    $errors['title'] = 'Title must be letters and spaces only';
                }
            }
        // Check ingredients    
            if(empty($_POST['ingredients'])){
                $errors['ingredients'] = 'At least one ingredient is required <br>';
            } else{
                $ingredients = ($_POST['ingredients']);
                if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){   
                                // 영문 대,소문자 띄어쓰기만 허용 각 재료 사이는 ,로 구분 
                    $errors['ingredients'] = 'Ingredients must be a comma separated list';
                }
            }
        
            //array_fillter($array) array에 값이 없으면 false, 있으면 true
            if(array_filter($errors)){
                // error 메세지 O
            } else{
                // error X --> 입력값이 유효하므로 다음 업무 진행
                header('Location: PizzaProject_Main.php');
            }

        
        } // end of POST check  


?>

<!DOCTYPE html>
<html>

<?php include('PizzaProject_Templates/PizzaProject_Header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class = "white" action="PizzaProject_AddPizza.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"> 
                                                <!-- error 발생 하더라도 입력값 유지 -->
        <div class="red-text"><?php echo $errors['email']; ?></div> 
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>"> 
        <div class="red-text"><?php echo $errors['title']; ?></div> 
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div> 
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div> 
    </form>
</section>

<?php include('PizzaProject_Templates/PizzaProject_Footer.php') ?>

</html>