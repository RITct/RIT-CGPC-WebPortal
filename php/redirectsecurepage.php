<?php
//...Valid user check
if(!$_SESSION["email"])
{
    header("Location: index.html");
    exit;
}
?>