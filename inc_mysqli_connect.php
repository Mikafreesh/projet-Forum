<?php


  $_SESSION["machine"] = getenv("HTTP_HOST");

  if ($_SESSION["machine"] == "127.0.0.1" or $_SESSION["machine"] == "localhost"  or $_SESSION["machine"] == "192.168.0.22"){
        $mysqli = mysqli_connect('127.0.0.1', 'root', 'genius371524', 'forum');            
        if (!$mysqli) 
        {
            die('Erreur de connexion (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }      
  }else{
    $mysqli = mysqli_connect('db28663-forum.sql-pro.online.net', 'db104314', '371524253246', 'db28663_forum');            
    if (!$mysqli) 
    {
        die('Erreur de connexion (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }      
  }

?>