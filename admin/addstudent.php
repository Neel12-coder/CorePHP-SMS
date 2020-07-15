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
<form method="post" action="addstudent.php" enctype="multipart/form-data">   <!-- imp for img -->
    <table border="1" align="center" style="width:70%;margin-top:40px;">
    <tr>
       <td align="left">Roll No.</td><td align="center"><input type="number" name="rollno" placeholder="Enter Roll Number" required></td> 
    </tr>
    <tr>
       <td align="left">Full Name</td><td align="center"><input type="text" name="name" placeholder="Enter student Name" required></td> 
    </tr>
    <tr>
       <td align="left">City</td><td align="center"><input type="text" name="city" placeholder="Enter City.." required></td> 
    </tr>
    <tr>
       <td align="left">parent's contact Number</td><td align="center"><input type="number" name="pcon" maxlength="13" required></td> 
    </tr>
    <tr>
       <td align="left">Standard</td>
        <td align="center"><select name="std">
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
        <td colspan="2" align="center"><input type="submit" name="submit" value="SuBmIt"></td>
        </tr>
        
    
    </table>
</form>
<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $rollno =$_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['std'];
    $imagename = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    
    move_uploaded_file($tempname,"../dataimg/$imagename");
    $qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
    
    $run = mysqli_query($con,$qry);
    echo($run);
    
    if($run == true)
    {
        ?>
        <script>
            alert('Data inserted successfully');
        </script>
        <?php
    }
}

?>