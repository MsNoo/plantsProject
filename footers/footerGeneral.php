<?php
//session_start();

if (isset($_SESSION["adminLogged_in"])) {
    include "footerAdmin.php";
}

if (isset($_SESSION["userLogged_in"])) {
        include "footerUser.php";
} 
    
if (!isset($_SESSION["adminLogged_in"]) && !isset($_SESSION["userLogged_in"])){
    include "footer.php";
}
?>