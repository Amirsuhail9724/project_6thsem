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
  <!-- contact text  -->
  <div class="container-fluid  d-flex align-items-center flex-column">
    <p class="fs-1 fw-bold mt-2">Contact Us</p>
    <div class=" container text-dark">
      <p class="fs-5  mt-2 nav-link text-dark ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
        officiis quasi quibusdam, expedita quidem sint. Amet assumenda doloremque dolore eum ea possimus impedit velit
        voluptatem excepturi numquam, fugit fuga tenetur iste odit adipisci architecto dolores eos, at perspiciatis!
        Omnis eligendi iusto, sunt repudiandae architecto culpa at! Delectus at facere corporis.</p>
    </div>
  </div>
  <!-- contact box  -->

<div class="container-fluid d-flex align-content-evenly  justify-content-evenly rounded-3 mb-5">
    <div class="row">
      <div class="col shadow me-3">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119681.868239765!2d72.83150014244224!3d20.38048255614224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce2c01246603%3A0xca6d49eb7baace15!2sVapi%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1704009482765!5m2!1sen!2sin"
          class="rounded-3 mt-3" width="700" height="450" style="border:10;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p class="fs-5 mt-2 fw-bold">Address</p>
        <p class="fs-6 nav-link"> <img src="contact/location.svg" class="me-2"><a target="_blank" href="#">xyx/vapi</a>
        </p>
          <p class="fs-5 mt-2 fw-bold">Contact us</p>
          <p class="nav-link d-flex align-item-center"><a href="tel:1234567890" class="text-decoration-none text-dark">
              <img src="contact/telephone-fill.svg" class="me-2"> +91 2563458910</a></p>
          <p class="nav-link d-flex align-item-center"><a href="tel:1234567890" class="text-decoration-none text-dark">
              <img src="contact/telephone-fill.svg" class="me-2"> +91 6512562120</a></p>
          <p class="fs-5 mt-2 fw-bold">Email us</p>
          <p class="nav-link d-flex align-item-center"><a href="email:xyz@gmail.com"
              class="text-decoration-none text-dark"> <img src="contact/envelope-fill.svg" class="me-2">
              bluestar@gmail.com</a></p>
          
      </div>
      <div class="col  ms-3 mt-5 ">
      <form class="mt-5 ms-5 ">
      <p class="fs-3 mt-2 fw-bold">Send Message</p>

         <div class="mb-3">
         <p class="fs-5 mt-2 fw-bold">Name</p>
          <input type="text" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. N</div>
        </div>

         <div class="mb-3">
         <p class="fs-5 mt-2 fw-bold">Email</p>
          <input type="email" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. N</div>
        </div>
        
         <div class="mb-3">
         <p class="fs-5 mt-2 fw-bold">Subject</p>
          <input type="text" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. N</div>
        </div>

         <div class="mb-3">
         <p class="fs-5 mt-2 fw-bold">Message</p>
          <textarea class="form-control shadow-none" ></textarea>
          <div class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. N</div>
        </div>

        <button type="submit" class="btn btn-outline-dark">Submit</button>
        </form>
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