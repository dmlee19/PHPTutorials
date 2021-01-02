<?php 

     $file = 'content.txt';
    
    // opening a file for reading
        $handle = fopen($file,'a+'); // 'r' for reading only
    
    // read the file
        echo fread($handle, filesize($file)); 
        echo fread($handle, 112); // 원하는 byte 수 만큼 출력 
    
    // read a single line 
        // fgets --> file get single line
        echo fgets($handle); // Be yourself; everyone else is already taken. 
        echo fgets($handle); // We are all in the gutter, but some of us are looking at the stars.
                             // 길이와 상관없이 첫번째 라인 출력 연속해서 라인을 읽음(중복X)
     
    // read a single character
        // fgetc --> file get character
        echo fgetc($handle); // B
        echo fgetc($handle); // e
                             // 연속적으로 순서대로 문자 출력 
     
    // writing to a file 
        // fopen code r+로 변경해야 write 가능 / 문서 맨 처음에 시작, 값을 덮어씀
        fwrite($handle,"\nEverything popular is wrong");
        // fopen code a+ / 문서의 맨 뒤에서 시작 
        fwrite($handle,"\nEverything popular is wrong");

    // file close
        fclose($handle);
    
    // delete file
        unlink($file);

?>
