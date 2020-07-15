<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location: ../login.php');
}
?> 
<?php
          include('header.php');
        include('titlehead.php');
?>
        
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Admin Dashboard</title>
    </head>
    <body>
        <div class="dashboard">
        <table>
            <tr align="center">
            <td>1. </td><td><a href="addstudent.php" >Insert Student</a></td>
            </tr>
             <tr align="center">
            <td>2. </td><td><a href="updatestudent.php">Update Student</a></td>
            </tr>
             <tr align="center">
            <td>3. </td><td><a href="deletestudent.php">Delete Student</a></td>
            </tr>    
        </table>
        
        </div>
    </body>


</html>