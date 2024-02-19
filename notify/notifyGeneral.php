<?php
error_reporting(0);
session_start();

if (isset($_SESSION["adminLogged_in"])) {
    include "notifyForm.php";
}

if (isset($_SESSION["userLogged_in"])) {
        include "notifyForm.php";
} 
    
if (!isset($_SESSION["adminLogged_in"]) && !isset($_SESSION["userLogged_in"])){
    include "notifyFormNL.php";
}
?>