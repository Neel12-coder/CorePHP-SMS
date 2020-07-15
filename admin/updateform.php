<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo"";
}
else{
    header('location:../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');
include('../dbcon.php');
$sid = $_GET['sid'];
$sql = " SELECT * FROM student WHERE id = '$sid' ";
$run = mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);

?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">   <!-- imp for img -->
    <table border="1" align="center" style="width:70%;margin-top:40px;">
    <tr>
       <td align="left">Roll No.</td><td align="center"><input type="number" name="rollno" value = <?php echo $data['rollno']; ?> required></td> 
    </tr>
    <tr>
       <td align="left">Full Name</td><td align="center"><input type="text" name="name" value ="<?php echo $data['name']; ?>"  required></td> 
    </tr>
    <tr>
       <td align="left">City</td><td align="center"><input type="text" name="city" value ="<?php echo $data['city']; ?>" required></td> 
    </tr>
    <tr>
       <td align="left">parent's contact Number</td><td align="center"><input type="number" name="pcon" value ="<?php echo $data['pcont']; ?>" maxlength="13" required></td> 
    </tr>
    <tr>
       <td align="left">Standard</td>
        <td align="center">
            <select name="std" value ="<?php echo $data['standard']; ?>">
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option> 
            </select></td> 
    </tr>
        <tr>
       <td align="left">Student Image</td><td align="center"><input type="file" name="img" required></td> 
    </tr>
        <tr>
        <input type="hidden" name="sid" value="<?php echo $data['id'] ?>"/>
        <td colspan="2" align="center"><input type="submit" name="submit" value="SuBmIt"></td>
        </tr>
        
    
    </table>
</form>