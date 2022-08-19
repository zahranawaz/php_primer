<?php 
$title="functions";
include 'include/header.php' ?>
    <?php
    
function name ($firstname, $lastname){

   $fullname= $firstname ." " . $lastname;
   echo"<p>$fullname</p>";
   return $lastname;






};
$lastName="mujahid";
$llastname=name("Zahra","nawaz");

function changename(&$llastname){
   $lastname=$llastname;
   return $lastname;
};
 $lastName=changename($llastname);
 echo $lastName;






?>
<?php require 'include/footer.php'; ?>








