<?php
$Host= "hackveda.in";
$User= "hackveda_yashchandra";
$Password="Tz+aZwCrgjv,";
$Dbname="hackveda_tmheart";
$conn=mysqli_connect($Host,$User,$Password,$Dbname);
if(!$conn){
    echo "connection failed",mysqli_connect_error();
}
$sql="Select * from profile";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    th, td {
  padding: 15px;
  text-align: left;
}

    </style>
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/appimg.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      TM-Heart
    </a>
  </div>
</nav>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">Height</th>
      <th scope="col">Weight</th>
      <th scope="col">Sex</th>
      <th scope="col">RefCode</th>
      <th scope="col">FriendRefCode</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
    </tr>
    <tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
        ?>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Email']?></td>
            <td><?php echo $row['Mobile']?></td>
            <td><?php echo $row['Age']?></td>
            <td><?php echo $row['Height']?></td>
            <td><?php echo $row['Weight']?></td>
            <td><?php echo $row['Sex']?></td>
            <td><?php echo $row['RefCode']?></td>
            <td><?php echo $row['FriendRefCode']?></td>
            <td><?php echo $row['Status']?></td>
            <td><?php echo $row['Date']?></td>
            <td><?php echo $row['Time']?></td>
        </tr>
        <?php
        }
        ?>
  </thead>
</table>
</body>
</html>