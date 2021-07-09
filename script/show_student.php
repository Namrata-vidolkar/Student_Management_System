<style>

.clip 
{
    width:200px;
    background-color:white;
    box-shadow: 1px 2px 5px 5px gray;
    border: 1px solid black;
    margin: 10px;
    word-wrap: break-word;
}

.clip:hover
{
    box-shadow: 1px 2px 15px 10px pink; 
}

._img 
{
    width:100px;
    height: 100px;
}
.panel_left
{
 margin:5px;
}
.panel_right
{
margin:5px;
word-wrap: break-word;
}







</style>
<?php

try
{
    include_once('./server/server.php');

    $st = "select * from stu ORDER BY id DESC";
    
    $st = $con->prepare($st);
    
    $st->execute();
    
    $row = $st->fetchAll(PDO::FETCH_ASSOC);
    
    if($st->rowCount()>0)
    {


        foreach($row as $r)
        {
          
                ?>
                <div align="center" class="clip">
                    
                <div class="panel_left">
                    <img src="images/stu.png" class="_img" alt="student"/>
                </div>
                <hr/>
                <div class="panel_right">

                
                    <label>Name:</label>
                    <b><?php echo($r["name"]);?></b>
                

               <br/><br/>
                

               <label>Gmail:</label>
                    <b><?php echo($r["gmail"]);?></b>

                    <br/><br/>

                <label>Roll:</label>
                    <b><?php echo($r["roll"]);?></b>

                    <br/><br/>

                <label>Batch:</label>
                    <b><?php echo($r["batch"]);?></b>
                </table>

                </div>

                </div>
                 
                <?php
            
        }

        //echo(json_encode($array));
    }
    
   
    
}
catch(PDOException $err)
{
echo $err->getMessage();
}

?>