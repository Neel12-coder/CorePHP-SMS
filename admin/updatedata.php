<?php
include('../dbcon.php');
    $rollno =$_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['std'];
    $id = $_POST['sid'];
    $imagename = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    
    move_uploaded_file($tempname,"../dataimg/$imagename");
    $qry = " UPDATE student SET rollno='$rollno', name='$name',city='$city', pcont ='$pcon', standard ='$std', image ='$imagename' WHERE id ='$id' ";
    
    $run = mysqli_query($con,$qry);
    echo($run);
    
    if($run == true)
    {
        ?>
        <script>
            alert('Data updated successfully');
            window.open('updateform.php?sid=<?php echo $id; ?>','_self');
        </script>
        <?php
    }
?>