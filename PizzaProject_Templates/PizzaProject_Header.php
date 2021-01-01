
<!-- 모든 프로젝트 파일 앞에 포함 -->
<?php 
    session_start();
    
    //Session for name
    //$_SESSION['name'] = 'yoshi'; //override

    if($_SERVER['QUERY_STRING'] == 'noname'){ // 'query_string == 'noname' --> *.php?noname
        unset($_SESSION['name']); // 단일 session memory 삭제
        //session_unset(); // 모든 session 삭제
    }

    // Null Coalescing
    $name = $_SESSION['name'] ?? 'Guest'; 
    // $_SESSION['name'] =Null 인 경우 ?? 뒤 Guest 사용

    // get Cookie
    $gender = $_COOKIE['gender'] ?? 'Unknown';

?>

<head>
    <title>Mario Pizza</title>
    <!-- Materialize CSS Library -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="PizzaProject_Main.php" class="brand-logo brand-text">Mario Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
                <li class="grey-text"> (<?php echo htmlspecialchars($gender); ?>)</li>
                <li><a href="PizzaProject_AddPizza.php" class="btn brand z-depth-0">Add pizza</a></li>
            </ul>
        </div>
    </nav>