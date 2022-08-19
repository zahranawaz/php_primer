<?php 
$title="while loops";

include 'include/header.php' ?>
    <?php
    
    echo"while and do-while loops:";
    $count=0;
    while($count<10){
        echo" <p> The count is $count </p>";
        $count++;
    }

    do{
        echo"<h3>The count is $count </h3>";
        $count--;
    } while($count>0);
    
    ?>
 <?php require 'include/footer.php'; ?>