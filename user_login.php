<?php

    $server="localhost";
    $username="root";
    $pass="";
    $database="bluestar";
    $con=mysqli_connect($server,$username,$pass,$database);
    if(!$con)
    {
        echo "Failed to Connect".mysqli_connect_error();
    }



    if(isset($_POST["login"]))
    {

        $email=$_POST["email"];
        $pass=$_POST["password"];
        
        $quer= "SELECT * FROM user_register WHERE email='{$email}'  and password='{$pass}'";
        $result=mysqli_query($con,$quer);
        $data=mysqli_fetch_assoc($result);
            if($data['email']==$email && $data['password']== $pass)
            {
                
                
                session_start();
                $_SESSION["uname"]=$data["fname"];
               
                
                header("Location: http://localhost/bluestar/index.php?");
            }
            else
            {
                
           
                echo "<script> alert('check your username and password');
                window.location.href='index.php';
                
                </script>";
            }
                
            
        
        
    }
    




?>