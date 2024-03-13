   <!-- login modal  -->

   <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark fw-bold d-flex align-item-center" id="staticBackdropLabel">
            <img src="person.svg" class="log-person me-2">
            User Login
          </h1>
          <button type="button" class="btn-close  shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <form action="user_login.php" method="POST">
            <div class="mb-3">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Email address</label>
                <input type="email" class="form-control shadow-none" id="exampleInputEmail1"
                  aria-describedby="emailHelp" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label " >Password</label>
                <input type="password" class="form-control shadow-none " id="exampleInputPassword1" name="password">
              </div>
              <div class="mb-3 d-flex justify-content-center">
                <button type="submit" name="login" class="btn btn-success shadow-none" > Login           </button>
                <br>
              </div>
              <div class="mb-3 float-end">
                <a href="javascript:void(0)" class="text-dark text-decoration-none">Forgot Your Password?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- register modal  -->

  <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark fw-bold d-flex align-item-center" id="staticBackdropLabel">
            <img src="person-vcard-fill.svg" class="log-person me-2">
            User Registration
          </h1>
          <button type="button" class="btn-close  shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <form action="user_register_code.php"  enctype="multipart/form-data" method="POST" >
            <div class="d-flex justify-content-center mb-3">
              <span class="badge text-dark">Your Details Must Have To Match With Your ID (Aadhar Card, Passport,
                Driving License, etc.)</span>
            </div>
            <div class="container-fluid">
              <div class="row mb-3">
                <div class="col">
                  <input type="text" class="form-control shadow-none" placeholder="First name" aria-label="First name" name="fname" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control shadow-none" placeholder="Last name" aria-label="Last name" name="lname" required>
                </div>
              </div>
              <div class="row mb-1">
                <div class="col">
                  <input type="number" class="form-control shadow-none" placeholder="Mobile Number"
                    aria-label="Last name" name="phno" required>
                </div>
                <div class="col">
                  <select class="form-select text-center shadow-none" aria-label="Default select example" name="gender">
                    <option selected disabled>Select Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <input class="form-control shadow-none" type="file" id="formFile" name="photo" accept=" .jpg , .jpeg , .png">
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <input type="email" required class="form-control shadow-none" placeholder="Enter Your Email Address"
                    aria-label="Last name" name="email">
                </div>
                <div class="col">
                  <input type="date" required class="form-control shadow-none" 
                    aria-label="Last name" name="dob">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="password" required class="form-control shadow-none" placeholder="Enter Your Password"
                    aria-label="Last name" name="password">
                </div>
                <div class="col">
                  <input type="password" required class="form-control shadow-none" placeholder="Confrom Your Password"
                    aria-label="Last name" name="cnfpassword">
                </div>
              </div>
            </div>
            <div class="mb-3 my-4">
              <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success shadow-none" name="register">Register</button>
                <br>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>