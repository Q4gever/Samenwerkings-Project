<?php
    session_start();
        if(isset($_SESSION['admin']) && $_SESSION['admin']){
            include "navadmin.php";

            $imAdmin = true;

        }
        else if(isset($_SESSION['client']) && $_SESSION['client']){
            include "navclient.php";
            
            $imClient = true;

        } else {
            include "navadmin.html";
        }
?>