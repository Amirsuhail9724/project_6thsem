<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Setting</title>
    <?php
    include("css.php");
    ?>
</head>
<body>
  <?php
      require("sidebar.php");
  ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10  overflow-hidden content-div d-flex flex-column">
                <!-- setting text  -->
                <div class="container-fluid ">
                    <p class="fs-3 fw-bold mt-2 ">Setting</p>
                </div>

                <div class="card ps-3 pe-3 ">
                    <div class="card-body d-flex justify-content-between">
                        <h5>Genral Setting</h5>
                        <button type="button" class="btn btn-dark  shadow-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>
                    </div>
                    <h6 class="card-subtitle mb-2 ps-3 fw-bold">Site Title</h6>
                    <p class="card-text ps-3">Lorem ipsum dolor sit amet </p>
                    <h6 class="card-subtitle mb-2 ps-3 fw-bold">About us</h6>
                    <p class="card-text ps-3">Lorem ipsum dolor sit amet </p>
                </div>
            </div>
        </div>
    </div>

   <!-- Modal -->
   <form action=""> 
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Genral Setting</h1>
              <button type="button" class="btn-close  shadow-none  " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3  me-3 ms-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Site Title</label>
                <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
              <div class="mb-3 me-3 ms-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">About us</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control shadow-none "></textarea>
                <!-- <input type="text" class="form-control shadow-none rounded-pill" id="exampleInputPassword1"> -->
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary bg-white border-white text-dark fw-bold shadow-none" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success shadow-none">Submit</button>
            </div>
          </div>
        </div>
      </div>
   </form>
</body>
  <?php
      require("js_code.php");
  ?>
</html>