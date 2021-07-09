<?php 

include("./server/server.php");

if(isset($_POST["del_stu"]))
{
    try
{

    $sq =  "delete from stu where gmail=:dgmail";

    $sq =  $con->prepare($sq);

    $sq->bindParam(":dgmail",$_POST["dgmail"]);
   

    $sq->execute();


    echo("Student Data Deleted");

     ?>  
    <script>
        alert("Student Deleted");
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