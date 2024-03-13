<?php 
    include("sidebar.php");
    
    include("css.php");
  
    $server="localhost";
    $username="root";
    $pass="";
    $database="bluestar";
    $con=mysqli_connect($server,$username,$pass,$database);
    if(!$con)
    {
        echo "Failed to Connect".mysqli_connect_error();
    } 

    $query="SELECT * FROM user_register";
    $result=  mysqli_query($con,$query);
    
                                

     
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    <div class="content-div col-10">
        <div class="container-fluid ">
            <table class="table table-striped mt-4 table-bordered  overflow-y-scroll">
           
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">fname</th>
                        <th scope="col">lname</th>
                        <th scope="col">phno</th>
                        <th scope="col">gender</th>
                        <th scope="col">photo</th>
                        <th scope="col">email</th>
                        <th scope="col">pass</th>
                        <th scope="col">dob</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                      <td><?php echo $row['fname'];?></td>
                      <td><?php echo $row['lname'];?></td>
                      <td><?php echo $row['phno'];?></td>
                      <td><?php echo $row['gender'];?></td>
                      <td><img src="../user_images/<?php  echo $row['photo']; ?>" alt="" height="90px" width="70px"></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['password'];?></td>
                      <td><?php echo $row['dob'];?></td>
                    </tr>
                <?php }; ?>



            </table>
        </div>
    </div>
</body>
</html>