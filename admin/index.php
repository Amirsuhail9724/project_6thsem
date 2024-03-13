<?php
  // require("db_config.php");
  // require("essentials.php");
  // session_start();
  // if(isset($_SESSION['admin_id']) )
  // {
  //   redirection("dashboard.php");
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php
    include("css.php");
    require("js_code.php");

    ?>
    <!-- form submit php code  -->

<?php
  if(isset($_POST['submit']))
  {
    $frm_data=filteration($_POST);
    $query="SELECT * FROM `admin_cred` WHERE `admin_name`=? and `admin_pass`=?";
    $values=[$frm_data['admin_id'],$frm_data['admin_pass']];
    $res=credential($query,$values,"ss");
    if($res->num_rows ==1)
    {
      $row=mysqli_fetch_assoc($res);
      $_SESSION['Login_status']=true;
      $_SESSION['admin_id']=$row['sr_no'];
      redirection("dashboard.php");
    }
    else
    {
        alert("error","Login Failed - Check Your Id and Pass");
    }
    // print_r($res);
  }
?>
    <style>
      .adminlogin
      {
        height: 100vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
    </style>
</head>
<body class="bg-dark">
    <div class="adminlogin bg-dark">
      <form class="bg-white border border-white pe-5 ps-5 rounded-3" method="POST">
        <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
          <p class=" text-center fs-3 fw-bold mt-3"> <img src="person.svg" class="log-person me-2"></p>
          <p class=" text-center fs-3 fw-bold ">Admin Login</p>
          <div class="mb-3">
            <br>
            <label for="exampleInputEmail1" class="form-label text-dark ">Email address</label>
            <input type="text" required name="admin_id" class="form-control shadow-none rounded-pill border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-dark">Password</label>
            <input type="password" required name="admin_pass" class="form-control shadow-none rounded-pill border-dark" id="exampleInputPassword1">
          </div>
          <br>
          <button type="submit" name="submit" class="btn btn-dark mb-3 rounded-pill">Submit</button>

          <br>
          <br>
        </div>
      </form>
    </div>
</body>
</html>

