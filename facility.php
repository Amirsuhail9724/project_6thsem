<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BlueStar- Facility</title>
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
<!-- facility text  -->
    <div class="container-fluid  d-flex align-items-center flex-column">
        <p class="fs-1 fw-bold mt-2">Provided Facilities</p>
        <div class=" container text-dark">
            <p class="fs-5  mt-2 nav-link text-dark ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis quasi quibusdam, expedita quidem sint. Amet assumenda doloremque dolore eum ea possimus impedit velit voluptatem excepturi numquam, fugit fuga tenetur iste odit adipisci architecto dolores eos, at perspiciatis! Omnis eligendi iusto, sunt repudiandae architecto culpa at! Delectus at facere corporis.</p>
        </div>
    </div>
<!-- facility box  -->

    <div class="container-fluid d-flex align-content-evenly flex-column justify-content-evenly rounded-3 mb-5">
        <div class="row mt-5 ms-3 d-flex justify-content-evenly ">
            <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/wifi.png" style="height: 50px; width: 50px;" class="mt-3"  alt="">
                <p class="text-dark mt-3 fw-bold">Wifi</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
            <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/air-conditioner.png" style="height: 50px; width: 50px;" class="mt-3"  alt="">
                <p class="text-dark mt-3 fw-bold">Air Conditioner</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
            <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/dumbbell.png" style="height: 50px; width: 50px;" class="mt-3" alt="">
                <p class="text-dark mt-3 fw-bold">GYM</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
             <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/parking-lot.png" style="height: 50px; width: 50px;" class="mt-3" alt="">
                <p class="text-dark mt-3 fw-bold">Parking Lot</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
            <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/pool.png" style="height: 50px; width: 50px;" class="mt-3"  alt="">
                <p class="text-dark mt-3 fw-bold">Pool</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
            <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/restaurant.png" style="height: 50px; width: 50px;" class="mt-3"  alt="">
                <p class="text-dark mt-3 fw-bold">Resturant</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
            <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/room-heater.png" style="height: 50px; width: 50px;" class="mt-3" alt="">
                <p class="text-dark mt-3 fw-bold">Room Heater</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
            <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/tv.png" style="height: 50px; width: 50px;" class="mt-3" alt="">
                <p class="text-dark mt-3 fw-bold">Television</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
            <div class="col-3 text-dark mt-2 me-2 mb-2 ms-2 shadow rounded-3">
                <img src="facility/house.png" style="height: 50px; width: 50px;" class="mt-3" alt="">
                <p class="text-dark mt-3 fw-bold">Club House</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, id?</P>
            </div>
        </div>
    </div>

<!-- footer  -->
<?php
  include("footer.php");
  ?>
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