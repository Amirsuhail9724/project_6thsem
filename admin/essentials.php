<?php
// alert 
function alert($type,$message)
{
  $status=($type=="success")?"success":"danger";
    echo <<< alert
        <div id="alert-id" class="alert mt-4 custom-alert alert-$status alert-dismissible fade show" role="alert">
          <strong class="ms-3 me-3">$message</strong>.
          <button type="button"class="btn btn-$status shadow-none  badge" onclick="alerthide()" >Close </button>
        </div>
        alert;
}

// dashboard 

function redirection($location)
{
  echo "<script>window.location.href='$location';</script>";
}

//admin credential check

function adminsession()
{
  session_start();
  if(! isset($_SESSION['admin_id']) )
  {
    redirection("index.php");
  }
}
?>