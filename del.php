<html>
<head>
<title>Student Management System</title>
</head>

<style>
*{
    margin:0;
    padding:0;
    transition:1s all;
}

body{
    background-color:whitesmoke;
}
</style>
<body>

<div>
<?php include_once("pages/topbar.php"); ?>
</div>

<style>

.top_panel
{
    width:100%;
    height:90%;
    display:flex;
    flex-direction: row;
    flex-wrap: wrap;
    flex-flow: row;
}

.panel_left
{
  width:20%;
  height:100%;

  border-right: 1px solid black;

}

.panel_right
{
    width:79%;
    height:100%;
}


.opbtn 
{
    width:90%;
    background-color: black;
    color:white;
    font-size: large;
    border:1px solid white;
    transition: 1s all;
    padding:10px;
    margin-top: 10px;
}

.opbtn:hover
{
    background-color:white;
    border:1px solid black;
    color: black;
}

.stu_add
{
  width:50%;
  background-color: black;
  color: white;
  padding: 5px;
  
}

.stu_add:hover
{
    box-shadow: 1px 3px 15px 15px grey;
}

.table
{
    color:white;
    width:100%;
    align-content: center;
    margin:20px;
}

td
{
    align-content: center;
    align-self: center;
    align-items: center;
}


input
{
    padding:10px;
    border:1px solid white;
    border-radius:20px;
    text-align: center;
}


.addbtn
{
    background-color: black;
    padding:10px;
    color:white;
    border:1px solid white;
    padding-left: 12px;
    padding-right: 12px;
    margin-right:20px;
}

.addbtn:hover
{
    padding-left: 30px;
    padding-right: 30px;
}



</style>

<div align="center" class="top_panel">

 <div class="panel_left">
 <br/>
 <a href="/add.php"><button class="opbtn">Add Student</button></a>
 <a href="/edit.php"><button class="opbtn">Edit Student</button></a>
 <a href="/del.php"><button class="opbtn">Delete Student</button></a>

 </div>
 

 
 <div class="panel_right" align="center">

 <br/> <br/>

  <div class="stu_add" align="center">
      <br/>
      
  <h3>Delete Student</h3>

  <br/>
  <hr/>
  <br/>

  <form action="" method="POST">

  <table class="table" align="center">
  <tr>
      <td>
          <label>Enter student gmail to delete:</label>
      </td>
      <td>
          <input type="gmail" name="dgmail" placeholder="Gmail for delete data" required/>
      </td>
  </tr>

  <tr>
      <td>
      <br>
      </td>
      <td>
      <br>
      </td>
  </tr>

  

  </table>
  <br>

  <input type="submit" name="del_stu" value="Delete Data" class="addbtn"/>

  </form>
  <br/>

  <?php 

    include_once("script/del_student.php");

  ?>

  <br/>

</div>

 </div>

</div>

<br/>

<div>
<?php include_once("pages/footer.php"); ?>
</div>


</body>
</html>