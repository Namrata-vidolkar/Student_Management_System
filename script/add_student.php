<?php 

include("./server/server.php");

if(isset($_POST["add_stu"]))
{
    try
{

    $sq =  "insert into stu values(0,:name,:gmail,:roll,:batch)";

    $sq =  $con->prepare($sq);

    $sq->bindParam(":name",$_POST["name"]);
    $sq->bindParam(":gmail",$_POST["gmail"]);
    $sq->bindParam(":roll",$_POST["roll"]);
    $sq->bindParam(":batch",$_POST["batch"]);

    $sq->execute();


    echo("New Student Added");

     ?>  
    <script>
        alert("New Student Added.");
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