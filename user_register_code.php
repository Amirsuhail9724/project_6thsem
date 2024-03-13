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

    if(isset($_POST['register']))
    {
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $phno=$_POST["phno"];
        $gender=$_POST["gender"];
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $cnfpass=$_POST["cnfpassword"];
        $dob=$_POST["dob"];

        function checkpass($pass,$cnfpass)
            {   
                $a=$pass;
                $b=$cnfpass;
                if($a==$b)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }

       
        if(!checkpass($pass,$cnfpass) )
        {
            echo "<script> alert('your password doesnot match ') </script>";
            die();
        }

       

      
    }

    if(isset($_FILES['photo']))
    {
       
         $filename=$_FILES['photo']['name'];
         $filetempname=$_FILES['photo']['tmp_name'];
         move_uploaded_file($filetempname,"./user_images/".$filename);
         $query="INSERT INTO user_register (fname,lname,phno,gender,photo,email,password,dob)   VALUES ('{$fname}','{$lname}','{$phno}','{$gender}','{$filename}','{$email}','{$pass}','{$dob}')";

         $result=  mysqli_query($con,$query);
         if($result)
         {
            header("Location: http://localhost/bluestar/index.php");
         }





    }



?>