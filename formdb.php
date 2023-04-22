<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        .container{
            width: 20%;
            height: 30%;
            border: 2px solid black;
            border-radius:2rem;
        }
        .b1{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button{
            width:5%;
            height:15%;
            border-radius:2rem;
        }
        table{
            border:2px solid black;
        }

    </style>
</head>
<body>
<form action="Task1.php" method="POST" >
    <h1 class="b1">Employee Register Form</h1>
    <div class="form-group">
    <div class="container">
        <label for="Name">Name </label>
        <input type="text"  class="form-control" name="Name" id="Name">
        <label for="DOB"> DOB </label>
        <input type="date"  class="form-control" name="DOB" max ="<?php echo date("Y-m-d");?>">
        <label for="Email">Email</label>
        <input type="email"  class="form-control" name="Email">
        <label for="text" >Phone No:</label>
        <input type="tel" class="form-control" name="phone"  pattern="[6789][0-9]{9}" maxlength="10" autocomplete="off">
       
        <label for="Degree" >Degree</label>
            <select class="form-control" name="Degree">
                <option >Degree</option>
                <option value="B.E">B.E</option>
                <option value="BCA">BCA</option>
                <option value="B.Tech">B.Tech</option>
                <option value="MBA">MBA</option>       
            </select>    
        <label for="Address" > Address</label>
            <textarea class="form-control" name="Address" rows="3" cols="40"></textarea></br>
            
    </div>
    </br>
    <div class="b1" >
        <button type="submit"> submit</button>
    </div>
    </form>
    
</body>
</html>
  