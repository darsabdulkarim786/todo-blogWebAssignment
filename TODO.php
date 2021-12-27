<html>
<?php 

//Starting Session.
session_start();

//executing if 'ADD' button pressed.
if(isset($_POST['ADD']))
{
$_val = $_POST['taskText'];
if(!empty($_val))
{
    $_array = array($_val);
}
else
{
    $_array =array();
}
 
if(isset($_SESSION['values']))
{
    $_array = array_merge($_SESSION['values'],$_array);
}
$_SESSION['values'] = $_array;
//$_val ="";
}

//executing if 'CLEAR' button pressed.
if(isset($_POST['CLEAR']))
{
    //Clearing 'values' Session elements.
    include ("clearSession.php");
}
?>
<!--HTML Tags.-->
    <head>
    <title>TODO PAGE</title>
    </head>
    <link rel="stylesheet" href="css_style.css">
    <center>
    <form method="POST">
    <h4 id="heading">To Do List Assignment</h4>
    <h4 id="SirName">Assigned By: Sir Gulsher Ligari</h4>
    <h5 id="data">Designed by: 2K18/CSM/1</h5>
    <h3>Enter Task Below in TextBox</h3>
    <div>
    <input class="task" id="textbox" type="text" placeholder="Enter Task " name="taskText" />
    <input class="buttons" type="submit" name="ADD" value="ADD TASK"/>
    <input class="buttons" type="submit" name="CLEAR" value="CLEAR ALL"/>
    </div>
</form>
    </center>
</html>