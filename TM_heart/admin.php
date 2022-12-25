<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TM-Heart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
        while($row=mysqli_fetch_assoc($result)){
            echo $row['Name']."</br>";
            echo $row['Email']. "</br>";
        }
        mysqli_close($conn)
    ?>
</body>
</html>