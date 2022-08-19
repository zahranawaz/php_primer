<?php 
$title="if else statements";
include 'include/header.php' ?>
    <?php
    $grade='B';
    if($grade=='A'){
        echo"<p style='color:blue'>congratulations you have passed</p>";
    }
   else{
    echo "<h2 style= 'background:yellow','color:green'>You have no scored an A grade </h2>";
   }

    ?>
<?php require 'include/footer.php'; ?>