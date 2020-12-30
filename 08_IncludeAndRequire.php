<?php 
   
    // include vs require
        // 여러 파일에 반복적으로 사용되는 부분(주로 Header, Footer)을 따로 관리
        // 한번의 수정으로 include 또는 require 하는 모든 파일에 적용 

        // (Warning) include file이 없는 경우에도 해당 소스가 실행됨
        include('08_1_Header.php'); 
        
        // (Fatal Error) require file이 없는 경우 실행 중지
        require('08_2_Footer.php'); 

        // 괄호없이 사용 가능
        include '08_1_Header.php';
        require '08_2_Footer.php';
    
        echo 'end of php';  // include 파일 문제 시 --> 출력
                            // require 파일 문제 시 --> 출력 X
?>

