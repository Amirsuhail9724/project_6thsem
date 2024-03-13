<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BlueStar- Home</title>
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

  <!-- slide  -->

<div class="container-fluid">
        <img src="images/pic7.png"  class="w-100 d-block rounded-3"/>
</div>

  <!-- booking availibility  -->
<div class="container-fluid d-flex justify-content-center">
  <div class="container availibility-form bg-white rounded-3 shadow pb-2 pe-4 badge rounded-pill px-5 ">
    <!-- <div class="row ">
      <p class="nav-link fw-bold fs-4 text-dark">Check Booking Availibility</p>
    </div> -->
    <form action="">
      <div class="row ">
        <div class="col">
          <label for="exampleInputEmail1" class="nav-link text-dark">Check In</label>
          <input type="date" required class="form-control shadow-none lg-2" placeholder="s" aria-label="Last name">
        </div>
        <div class="col">
          <label for="exampleInputEmail1" class="nav-link text-dark">Check Out</label>
          <input type="date" required class="form-control shadow-none lg-2" placeholder="" aria-label="Last name">
        </div>
        <div class="col">
          <label for="exampleInputEmail1" class="nav-link text-dark">Adult</label>
          <select class="form-select text-center shadow-none" aria-label="Default select example">
            <option value="" selected disabled>Click Here To Select</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
          </select>
        </div>
        <div class="col">
          <label for="exampleInputEmail1" class="nav-link text-dark">Children</label>
          <select class="form-select text-center shadow-none" aria-label="Default select example">
            <option value="" selected disabled>Click Here To Select</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
          </select>
        </div>
        <div class="col me-5 mb-3">
          <label for="" class=" nav-link text-dark">Check Booking Availibility</label>
          <div class="row d-flex justify-content-center">
            <button type="button" class="btn btn-outline-dark shadow-none  ">Check</button>

          </div>
        </div>
      </div>
    </form>
  </div>
</div>

  <!-- rooms  text-->

  <div class="container-fluid mt-5 d-flex justify-content-center">
    <p class="fs-5 fw-bold mt-5">Our Rooms</p>
  </div>

  <!-- rooms cards -->

  <div class="container-fluid mt-2 ">
    <div class="row d-flex justify-content-evenly align-item-evenly">
      <div class="card  my-2 shadow-sm mx-2" style="width: 18rem;">
        <img src="rooms/pexels-max-rahubovskiy-7534555.jpg" alt="" class="card-img-top mt-3">
        <div class="card-body">
          <h5 class="card-title ">Room name</h5>
          <p class="  text-dark"><span class="text-success fw-bold">₹200</span> - Per Night</p>
          <p class="card-text ">
            <span class="fw-bold">Features</span>
          <div class="col">
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</p>
          </div>
          <span class="fw-bold ">Facility</span>
          <div class="col mt-3">
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">AC</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Television</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</p>
          </div>
          <span class="fw-bold ">Guest</span>
          <div class="row">
            <div class="col">
              <p class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</p>
            </div>
            <div class="col">
              <p class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</p>
            </div>
          </div>
          <span class="fw-bold ">Rating</span>
          <div class="col mt-3">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
          </p>
          <div class="col d-flex justify-content-evenly">
            <a href="#" class="btn btn-sm btn-success">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="card  my-2 shadow-sm mx-2" style="width: 18rem;">
        <img src="rooms/pexels-max-rahubovskiy-7534561.jpg" alt="" class="card-img-top mt-3">
        <div class="card-body">
          <h5 class="card-title ">Room name</h5>
          <p class="  text-dark"><span class="text-success fw-bold">₹200</span> - Per Night</p>
          <p class="card-text ">
            <span class="fw-bold">Features</span>
          <div class="col">
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</p>
          </div>
          <span class="fw-bold ">Facility</span>
          <div class="col mt-3">
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">AC</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Television</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</p>
          </div>
          <span class="fw-bold ">Guest</span>
          <div class="row">
            <div class="col">
              <p class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</p>
            </div>
            <div class="col">
              <p class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</p>
            </div>
          </div>
          <span class="fw-bold ">Rating</span>
          <div class="col mt-3">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
          </p>
          <div class="col d-flex justify-content-evenly">
            <a href="#" class="btn btn-sm btn-success">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="card  my-2 shadow-sm mx-2" style="width: 18rem;">
        <img src="rooms/pexels-quark-studio-2507007.jpg" alt="" class="card-img-top mt-3">
        <div class="card-body">
          <h5 class="card-title ">Room name</h5>
          <p class="  text-dark"><span class="text-success fw-bold">₹200</span> - Per Night</p>
          <p class="card-text ">
            <span class="fw-bold">Features</span>
          <div class="col">
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</p>
          </div>
          <span class="fw-bold ">Facility</span>
          <div class="col mt-3">
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">AC</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Television</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</p>
          </div>
          <span class="fw-bold ">Guest</span>
          <div class="row">
            <div class="col">
              <p class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</p>
            </div>
            <div class="col">
              <p class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</p>
            </div>
          </div>
          <span class="fw-bold ">Rating</span>
          <div class="col mt-3">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
          </p>
          <div class="col d-flex justify-content-evenly">
            <a href="#" class="btn btn-sm btn-success">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="card  my-2 shadow-sm mx-2" style="width: 18rem;">
        <img src="rooms/pexels-suzukii-xingfu-872831.jpg" alt="" class="card-img-top mt-3">
        <div class="card-body">
          <h5 class="card-title ">Room name</h5>
          <p class="  text-dark"><span class="text-success fw-bold">₹200</span> - Per Night</p>
          <p class="card-text ">
            <span class="fw-bold">Features</span>
          <div class="col">
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">2 Rooms</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">1 Bathrooms</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">2 Balcony</p>
          </div>
          <span class="fw-bold ">Facility</span>
          <div class="col mt-3">
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Wifi</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">AC</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Television</p>
            <p class=" badge rounded-pill text-white bg-dark shadow-sm">Room Heater</p>
          </div>
          <span class="fw-bold ">Guest</span>
          <div class="row">
            <div class="col">
              <p class=" badge rounded-pill text-white bg-dark shadow-sm">4 Adult</p>
            </div>
            <div class="col">
              <p class=" badge rounded-pill text-white bg-dark shadow-sm">4 Children</p>
            </div>
          </div>
          <span class="fw-bold ">Rating</span>
          <div class="col mt-3">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
          </p>
          <div class="col d-flex justify-content-evenly">
            <a href="#" class="btn btn-sm btn-success">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark"> More details</a>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col d-flex justify-content-center my-2">
          <a href="rooms.php" class="btn btn-sm btn-outline-dark"> Click Here For More details</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Facility  text-->

  <div class="container-fluid mt-3 d-flex justify-content-center">
    <p class="fs-5 fw-bold">Our Facilitys</p>
  </div>

  <!-- Facility box  -->

  <div class="container-fluid mb-5">
    <div class="row d-flex justify-content-evenly ">
      <div class="col badge rounded-pill ">
        <img src="facility/wifi.png" style="height: 50px; width: 50px;" alt="">
        <p class="text-dark mt-3">Wifi</p>
      </div>
      <div class="col badge rounded-pill ">
        <img src="facility/tv.png" style="height: 50px; width: 50px;" alt="">
        <p class="text-dark mt-3">Television</p>
      </div>
      <div class="col badge rounded-pill ">
        <img src="facility/room-heater.png" style="height: 50px; width: 50px;" alt="">
        <p class="text-dark mt-3">Room Heater</p>
      </div>
      <div class="col badge rounded-pill ">
        <img src="facility/restaurant.png" style="height: 50px; width: 50px;" alt="">
        <p class="text-dark mt-3">Resturants</p>
      </div>
      <div class="col badge rounded-pill ">
        <img src="facility/pool.png" style="height: 50px; width: 50px;" alt="">
        <p class="text-dark mt-3">Swiming Pool</p>
      </div>
      <div class="col badge rounded-pill ">
        <img src="facility/parking-lot.png" style="height: 50px; width: 50px;" alt="">
        <p class="text-dark mt-3">Parking Lot</p>
      </div>
      <div class="col badge rounded-pill ">
        <img src="facility/dumbbell.png" style="height: 50px; width: 50px;" alt="">
        <p class="text-dark mt-3">GYM</p>
      </div>
      <div class="col badge rounded-pill ">
        <img src="facility/air-conditioner.png" style="height: 50px; width: 50px;" alt="">
        <p class="text-dark mt-3">Air Conditioner</p>
      </div>
    </div>
    <div class="row ">
      <div class="col d-flex justify-content-center my-2">
        <a href="facility.php" class="btn btn-sm btn-outline-dark"> Click Here For More details</a>
      </div>
    </div>
  </div>

  <!-- customer-rating text  -->

  <div class="container-fluid mt-3 d-flex justify-content-center">
    <p class="fs-5 fw-bold">Customer Rating and Comments</p>
  </div>

  <!-- customer rating  -->
  <div class="container ">
    <div class="swiper customer-rating">
      <div class="swiper-wrapper  mb-5">
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
        <div class="swiper-slide shadow py-4 bg-white px-4 rounded-3">
          <div class="row ">
            <img src="profile.jpg" alt="" style="height: 90px; width: 115px;" class="rounded-pill">
          </div>
          <p class="text-dark badge ">Mandal Kaushal</p>
          <p class="text-dark ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, veniam?</p>
          <div class="col mt-3 ">
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
            <p class=" badge "><img src="star.png" style="height: 20px; width: 20px;" alt=""></p>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!--  map text -->

  <div class="container-fluid mt-3 d-flex justify-content-center">
    <p class="fs-5 fw-bold">Reach us</p>
  </div>

<!-- map  -->

  <div class="container-fluid">
    <div class="py-4 px-4  d-flex rounded-4">
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119681.868239765!2d72.83150014244224!3d20.38048255614224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce2c01246603%3A0xca6d49eb7baace15!2sVapi%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1704009482765!5m2!1sen!2sin"
      class="rounded-3" width="900" height="550" style="border:10;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="col ms-5 rounded-4 d-flex flex-column justify-content-evenly">
        <div class="container mt-3 shadow-sm rounded-3">
          <p class="fs-5 mt-2 fw-bold">Contact us</p>
          <p class="nav-link d-flex align-item-center"><a href="tel:1234567890" class="text-decoration-none text-dark"> <img src="contact/telephone-fill.svg" class="me-2"> +91 2563458910</a></p>
        <p class="nav-link d-flex align-item-center"><a href="tel:1234567890" class="text-decoration-none text-dark"> <img src="contact/telephone-fill.svg" class="me-2"> +91 6512562120</a></p>
        </div>
        <div class="container mt-3 shadow-sm rounded-3">
          <p class="fs-5 mt-2 fw-bold">Email us</p>
        <p class="nav-link d-flex align-item-center"><a href="email:xyz@gmail.com" class="text-decoration-none text-dark"> <img src="contact/envelope-fill.svg" class="me-2"> bluestar@gmail.com</a></p>
        </div>
        <div class="container mt-3 shadow-sm rounded-3">
          <p class="fs-5  mt-2 fw-bold">Follow us</p>
          <p class="nav-link d-flex align-item-center"><a href="www.instagram.com" class="text-decoration-none text-dark"> <img src="contact/instagram.svg" class="me-2"> Instagram</a></p>
          <p class="nav-link d-flex align-item-center"><a href="www.facebook.com" class="text-decoration-none text-dark"> <img src="contact/facebook.svg" class="me-2"> Facebook</a></p>
          <p class="nav-link d-flex align-item-center"><a href="www.twitter.com" class="text-decoration-none text-dark"> <img src="contact/twitter.svg" class="me-2"> twitter</a></p>
        </div>
      </div>
    </div>
  </div>

<!-- footer  -->

<div class="container-fluid bg-white d-flex justify-content-evenly ">
  <div class="container mt-3">
    <p class="fs-5 mt-2 fw-bold">BLUESTAR</p>
    <p class="nav-link text-dark d-flex align-item-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam in quas voluptas adipisci dolor facere unde dolorem culpa officiis repudiandae delectus sed debitis illum expedita, dolores perspiciatis, ab obcaecati! Aut consequuntur, odit amet adipisci maiores error numquam aliquam impedit dolor nobis vitae perferendis consequatur quos doloribus architecto similique explicabo corrupti.</p>
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