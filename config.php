<?php
    $Host= "hackveda.in";
    $User= "hackveda_yashchandra";
    $Password="Tz+aZwCrgjv,";
    $Dbname="hackveda_tmheart";
    $conn=mysqli_connect($Host,$User,$Password,$Dbname);
    if(!$conn){
        echo "connection failed",mysqli_connect_error();
    }
    session_start();
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="Select * from profile where Email='$email' and Password='$password'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1)
        {
            echo "Login success";
            header("location:admin1.php");
        }
        else
        {
            $error="Invalid Login";
            
    
        }
    }
    mysqli_close($conn)
?>