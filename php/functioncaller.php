<?php
// session_start();
//   $_SESSION["email"] = "abhi2303237@gmail.com";
$tab=$_REQUEST["p1"];
$col=$_REQUEST["p2"];
include "select.class.php";
echo get($tab,$col);
//session_destroy();
?>
       