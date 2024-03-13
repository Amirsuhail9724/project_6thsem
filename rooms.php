<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BlueStar- Rooms</title>
  <!-- CSS -->
  <?php
  include("css.php");
  ?>
</head>

<body>
  <!-- navbar  -->

  <?php
  include("navbar.php");
  ?>
 
  <!-- Room box  -->

<div class="container-fluid">
  <div class="row mb-5">

    <div class="col">
      <div class=" mb-lg-0 col-3 mb-4 fixed-size">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded ">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
              <div class="border bg-light p-3 rounded mb-3 ">
                <h5 class="mb-3 me-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none ne-1">
                  <label class="form-check-label" for="f1">Facility one</lable>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none ne-1">
                  <label class="form-check-label" for="f2">Facility two</lable>
                </div>  
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none ne-1">
                  <label class="form-check-label" for="f3">Facility three</lable>
                </div>       
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-label">Adults</label>
                    <input type="number" class="form-control shadow-none mb-3">
                  </div>
                  <div>
                    <label class="form-label">Children</label>
                    <input type="number" class="form-control shadow-none mb-3">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>

  <!-- Cards ka detail start here -->

    <div class="col-8">
       <!-- room text  -->
      <div class="container-fluid  d-flex align-items-center flex-column">
        <p class="fs-1 fw-bold mt-2  sticky-top">Our Rooms</p>
      </div>
      <div class="card mb-4 border-0  me-4">
        <div class="row g-0 p-3 align-items-center shadow rounded">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="a1.jpg" class="img-fluid rounded" alt="...">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">AC</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Television</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 per night</h6>
            <a href="#" class="btn mb-3 btn-sm w-100 btn-success">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0  me-4">
        <div class="row g-0 p-3 align-items-center shadow rounded">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="a1.jpg" class="img-fluid rounded" alt="...">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">AC</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Television</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 per night</h6>
            <a href="#" class="btn mb-3 btn-sm w-100 btn-success">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0  me-4">
        <div class="row g-0 p-3 align-items-center shadow rounded">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="a1.jpg" class="img-fluid rounded" alt="...">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">AC</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Television</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 per night</h6>
            <a href="#" class="btn mb-3 btn-sm w-100 btn-success">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0  me-4">
        <div class="row g-0 p-3 align-items-center shadow rounded">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="a1.jpg" class="img-fluid rounded" alt="...">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">AC</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Television</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 per night</h6>
            <a href="#" class="btn mb-3 btn-sm w-100 btn-success">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0  me-4">
        <div class="row g-0 p-3 align-items-center shadow rounded">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="a1.jpg" class="img-fluid rounded" alt="...">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">AC</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Television</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 per night</h6>
            <a href="#" class="btn mb-3 btn-sm w-100 btn-success">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0  me-4">
        <div class="row g-0 p-3 align-items-center shadow rounded">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="a1.jpg" class="img-fluid rounded" alt="...">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">AC</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Television</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</span>
              <span class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 per night</h6>
            <a href="#" class="btn mb-3 btn-sm w-100 btn-success">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
       <!-- footer  -->
 <?php
  include("footer.php");
  ?>
    </div>

    <!-- Cards ka detail yha ktm -->

  </div>  
</div>


     
      <!-- modals  -->

      <?php
    include("modals.php");
  ?>

      <!-- JS  -->

      <?php
  include("js_code.php");
  ?>

</body>

</html>