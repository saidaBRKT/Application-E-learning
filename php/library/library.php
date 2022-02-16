<?php
    function isLoged(){
        return (isset($_SESSION['auth']["username"]))  && (isset($_SESSION['auth']["password"]));
    }
?>