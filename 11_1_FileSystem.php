<?php 

    $file = 'content.txt';
    
    if(file_exists($file)){
        // read file
        echo readfile($file) . '<br>';
        // copy file
        copy($file,'quotes.txt');
        // absolute path
        echo realpath($file) . '<br>';
        // file size
        echo filesize($file) . '<br>';
        //rename file
        rename($file, 'test.txt');

    } else{
        echo 'file dose not exist';
    }

    // make directory
    mkdir('quotes');

?>
