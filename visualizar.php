<?php
 



    if(!file_exists("figurinhas.txt")){
        echo 'Não há cadastro!!!';
    }else {
        $handle = fopen("figurinhas.txt", "r");
    }

    $handle = fopen("figurinhas.txt", "r");
    while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
    fclose($handle);

    ?>