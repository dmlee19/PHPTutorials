<?php 
    // Superglobals

    // $_GET['name']
    // $_POST['name'] // 대표적인 Superglobal

    // $_SERVER
    echo $_SERVER['SERVER_NAME'] . '</br>';     // localhost
                // SERVER_NAME 대문자 
    echo $_SERVER['REQUEST_METHOD'] . '<br>';   // GET
    echo $_SERVER['SCRIPT_FILENAME'] . '<br>';  // C:/xampp/htdocs/PHPTutorials/index.php
    echo $_SERVER['PHP_SELF'] . '<br>';         // /PHPTutorials/index.php
    // html form 사용 시 Action에 사용가능   
?>