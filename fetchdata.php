<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "empregistration"; 
 $connect = new mysqli($servername,$username,$password,$dbname);

  $qsql1 = "SELECT*FROM registrationdetails";
  $fetch = mysqli_query($connect,$qsql1);
  $data  = mysqli_fetch_all($fetch);
  echo"<table border=1>";
  echo"<tr><td>ID</td><td>Name</td><td>DOB</td><td>Email</td><td>phone</td><td>Degree</td><td>Address</td></tr>";
  
  foreach($data as $row){
    echo"<tr><td> $row[0]</td><td> $row[1]</td> <td>$row[2]</td><td> $row[3]</td> <td>$row[4]</td> <td>$row[5]</td> <td> $row[6]</td></tr>";
  }
  echo"</table>";
?>