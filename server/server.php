<?php

include_once("config.php");


try
{


$con = new PDO("mysql:host=$ServerName;dbname=$database",$UserName,$Password);


$con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$con ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$con -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);



// echo("Connection Done.!");


}
catch(PDOException $err)
{

     echo($err->getMessage());




}


?>

