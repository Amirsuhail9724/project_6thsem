<!-- navbar  -->
<?php 


  function logincheck()
  {
    session_start(); 
    if(isset($_SESSION['uname']))
      {

        
        echo  ' <h4  class="text-success">Welcome, '.$_SESSION["uname"].'</h4> ';
      } 
    else
    {
      echo '      <button type="button" class="btn btn-outline-dark shadow-none me-2" data-bs-toggle="modal"
                    data-bs-target="#loginmodal">
                  Login
                  </button>

                  <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal"
                    data-bs-target="#registermodal">Register
                  </button>';
    }
  }

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm sticky-top py-lg-2 px-lg-3 bg-white d-flex justify-content-between" >
    <div class="nav d-flex align-item-center">
      <a href="index.php" class="nav-link fw-bold fs-5 text-dark me-5">BLUESTAR</a>
      <a href="index.php" class="nav-link">Home</a>
      <a href="rooms.php" class="nav-link">Rooms</a>
      <a href="facility.php" class="nav-link">Facility</a>
      <a href="contact.php" class="nav-link">Contact</a>
      <a href="about.php" class="nav-link ">About</a>
    </div>
    <div class="navbar1">
    <?php  logincheck(); ?>
    

    </div>
  </nav>

