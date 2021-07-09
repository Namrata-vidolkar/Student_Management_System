<?php 

include("./server/server.php");

if(isset($_POST["edit_stu"]))
{
    try
{

    $gmail = $_POST["gmail"];

    $sq =  'update stu set name=:name,gmail=:gmail, roll =:roll,batch=:batch where gmail=:sgmail';

    $sq =  $con->prepare($sq);

    $sq->bindParam(":name",$_POST["name"]);
    $sq->bindParam(":gmail",$_POST["gmail"]);
    $sq->bindParam(":roll",$_POST["roll"]);
    $sq->bindParam(":batch",$_POST["batch"]);
    $sq->bindParam(":sgmail",$_POST["sgmail"]);

    $sq->execute();


    echo("Student Data Updated");

     ?>  
    <script>
        alert("Student Data Updated");
    </script>

    <?php

}
catch(Exception $err)
{
    $error = $err->getMessage();
    $msg = json_encode($error);

    echo $msg;

}








}

?>