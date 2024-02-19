<?php
session_start();

if (isset($_SESSION["adminLogged_in"])) {
    include "adminHeader.php";
}

if (isset($_SESSION["userLogged_in"])) {
        include "userHeader.php";
} 
    
if (!isset($_SESSION["adminLogged_in"]) && !isset($_SESSION["userLogged_in"])){
    include "header.php";
}
?>