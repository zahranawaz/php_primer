<?php 
$title="for loops";
include 'include/header.php' ?>
<?php
echo "<h1>this is the for loop </h1>";
for($count=0;$count<10;$count++){
    echo"<p> This is the count number $count </p>";
    echo"</br>";
}
?>
<?php require 'include/footer.php'; ?>