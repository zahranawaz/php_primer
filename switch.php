<?php 
$title="switch";
include 'include/header.php' ?>
    <?php
    $grade='A';
    switch($grade){
 
        case 'A':
            echo "You are a superstar";
            break;
        case 'B':
            echo "Okayish";
            break;
        default:
        echo"best of luck";
        break;







    }
    ?>
    <?php require 'include/footer.php'; ?>

