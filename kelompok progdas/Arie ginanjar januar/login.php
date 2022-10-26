<?php
$Usename = "login";
$Password = "lol";

if($Usename == "login" & $Password == "lol")
{
    echo "Username dan password sesuai, hak akses diberikan";
}
elseif($Usename == "login" & $Password != "lol")
{
    echo "Username Sesuai, password tidak sesuai";
}
elseif($Usename != "login" & $Password == "lol")
{
    echo "Username tidak sesuai, Password sesuai";
}
elseif($Usename != "login" & $Password != "lol")
{
    echo "Username dan Password tidak sesuai";
}
?>