<?php
 $title="datetime";
include 'include/header.php' ?>
<?php
   
   $dateNow=getdate();
   echo "<p>The date today is </p>" . $dateNow['mday']. "/" . $dateNow['mon'] . "/" . $dateNow['year'];
   echo"<hr/>";
   echo date("m/d/y G.i:s <br>", time()).'<br/>';
   echo"<hr/>";
   echo date("j  F Y  , \a\\t g.i a", time());
   echo"<hr/>";
   







   ?>
<?php require 'include/footer.php'; ?>







