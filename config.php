<?php

$db = new mysqli('localhost','root','','graphic_designers') or die($db->errors());
session_start();
function hack($hackvar){
      $hackvar = trim($hackvar);
      $hackvar = stripslashes($hackvar);
      $hackvar =htmlspecialchars($hackvar);
             return $hackvar; 
      }