
  <?php 
  $title="index";
  include 'include/header.php' ?>
  <?php
  echo"<h1>This is is php file now</h1>";
  echo "<h2>I hope it makes sense</h2>";
  $name= "zahra nawaz";
  echo"<h2>my name is $name </h2>";
  ?>
  <?php
  $age=20;
  echo "my age is $age";
  echo"</br>";
  echo 'my name is: '.$name.' and my age is '.$age.'';


  ?>
  <button type="button" class="btn btn-success"> LET'S BEGIN!</button>
  <button type="button" class="btn btn-dark"> LET'S BEGIN!</button>
  <?php require 'include/footer.php'; ?>