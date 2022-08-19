<?php 
 $title= "arrays";
include 'include/header.php' ?>
    <?php

     $numbers= array(1,2,3,4,5,6,7,8,92,55);
     $size= count($numbers);
     for($count=0;$count<$size;$count++){
          
        echo"<p>$numbers[$count]</p>";
        echo"</br>";




     }






    ?>
<?php require 'include/footer.php'; ?>











