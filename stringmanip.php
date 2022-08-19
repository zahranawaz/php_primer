<?php 
$title="string manipulation";
include 'include/header.php' ?>
    <?php
   echo "<h2>$title</h2>";
   $name="zahra nawaz";
   $sentence="My name is ";
   echo $sentence.": ".$name;
   echo"<hr/>";
   echo ucfirst($name);
   echo"<hr/>";
   echo ucwords($sentence." ".$name);
   echo"<hr/>";
   echo strtoupper($name);
   echo"<hr/>";
   echo strtoupper(str_replace("nawaz","mujahid",$name));
   echo"<hr/>";
   echo trim("     ABCDE     ");
   echo"<hr/>";
   echo ltrim("   ADBC");
   echo"<hr/>";
  echo trim(strtoupper(str_replace("nawaz", "mujahid",$name))) . "<h1> is the name I like of me</h1>";






















    ?>
<?php require 'include/footer.php'; ?>
