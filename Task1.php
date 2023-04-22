<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "empregistration"; 
   $connect = new mysqli($servername,$username,$password,$dbname);
   
      if(isset($_POST['Name']) && isset($_POST['DOB']) && isset($_POST['Email'])&& isset($_POST['phone'])&& isset($_POST['Degree'])&& isset($_POST['Address']))
      {
          $Name = $_POST['Name'];
          $DOB = $_POST['DOB'];
          $Email= $_POST['Email'];
          $phone = $_POST['phone'];
          $Degree= $_POST['Degree'];
          $Address = $_POST['Address'];

          $qsql = "INSERT INTO registrationdetails (Name, DOB, Email,phone,Degree,Address) VALUES ('$Name', '$DOB', '$Email','$phone','$Degree', '$Address')";
          if($connect->query($qsql) == TRUE){
              echo"The Employee details was updated succesfully";
          }
              else{
              echo"the information was missing";
              }
            }  
?>