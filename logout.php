<?php

echo "hit";

if(isset($_GET['signout'])){

    session_start();
    session_destroy();

    header("Location: /savory/home.php"); 
    exit; 

}
