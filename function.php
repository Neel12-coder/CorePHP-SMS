<?php
 function showdetails($std,$rollno)
 {
     include('dbcon.php');
     $qry = "SELECT * FROM student WHERE standard = '$std' AND rollno = '$rollno'";
     $run = mysqli_query($con,$qry);
     if(mysqli_num_rows($run)>0)
     {
         $data= mysqli_fetch_assoc($run);
         ?>
 <table style="background-color:#000;color:#fff;width:80%;margin-top:12px;" align="center" border="1">
        <tr>
              <th colspan="3">Student Details</th>
        </tr>
        <tr>
       <td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>" /></td>
       <th>Roll No</th>
       <td><?php echo $data['rollno']; ?></td>
       </tr>
       <tr>
        <th>Name</th>
       <td><?php echo $data['name']; ?></td>
       </tr>
       <tr>
        <th>Standard</th>
       <td><?php echo $data['standard']; ?></td>
       </tr>
       <tr>
        <th>Parent's Contact Number</th>
       <td><?php echo $data['pcont']; ?></td>
       </tr>
     <tr>
        <th>City</th>
       <td><?php echo $data['city']; ?></td>
       </tr>
        </table>
<?php
     }
     else{
        echo"<script>alert('No student found.');</script>"; 
     }
     
 }
?>