<?php
$Username = "admin";
$Password = "qwerty";
if($Username  == "admin" & $Password =="qwerty")
{
    echo "Username dan Password sesuai hak diberikan";
}
 elseif($Username != "admin" & $Password == "qwerty")
 {
    echo "Username dan password tidak sesuai";
 }
 elseif($Username == "admin" & $Password != "qwerty")
 {
    echo "Username dan password tidak sesuai";
 }
?>