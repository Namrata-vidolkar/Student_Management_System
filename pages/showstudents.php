<style>
._panel
{
width:60%;
}

.bar 
{
    background-color:black;
    width:100%;
    padding:10px;
}

.menu_option 
{
    display:flex;
        flex-direction: row;
        flex-wrap:wrap;
        flex-flow: wrap;
        align-items: center;
        justify-content: space-around
}
</style>
<div align="center">
<div class="_panel">

<br/> <br/>
<div class="_bar">
<h3>Student List</h3>
<br/>
</div>

<div class="menu_option">
    <?php include("script/show_student.php"); ?>
</div>

<br/> <br/>
</div>
</div>