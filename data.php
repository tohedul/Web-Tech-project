<?php
   $con = mysqli_connect("localhost","root","","guideme");

   $query="SELECT * FROM edu WHERE dept LIKE '".$_REQUEST['q']."%' OR name LIKE '".$_REQUEST['q']."%';";

   

    $run=mysqli_query($con,$query);
    $row=mysqli_num_rows($run);
    if($row >= 1)
    {
      

      echo "<table align='center' border='1' >
      <tr><th>Dept</th><th>Name</th><th colspan='2'>Operation</th></tr>";
      while($data=mysqli_fetch_assoc($run))
      {
        echo "<tr> <td>".$data["dept"]."</td><td>".$data["name"]."</td><td>"."<a href='../Controlar/update.php?id=".$data['id']." && name=".$data['name']." '>Update</a>"."</td><td>"."<a href='../View/delete.php?id=".$data['id']."'>Delete</a>"."</td></tr>";
      }

      echo "</table>";
    }
    else
    {
      echo "No data found!!";
    }
?> 