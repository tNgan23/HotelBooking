<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking-FACILITIES</title>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
  <?php require ('inc/links.php'); ?>
  <style>
    :root {
        --teal: #2ec1ac;
    }
    
    .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }
</style>

</head>

<body class="bg-light">
  <?php require ('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
      I Temporibus incidunt odio quos dolore commodi repudiandae tenetur consequuntur et similique asperiores.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/facilities/Wifi.svg" width="40px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ratione modi hic eveniet odit vero iste deserunt.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/facilities/Television.svg" width="40px">
            <h5 class="m-0 ms-3">Television</h5>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ratione modi hic eveniet odit vero iste deserunt.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/facilities/Radio.svg" width="40px">
            <h5 class="m-0 ms-3">Radio Music</h5>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ratione modi hic eveniet odit vero iste deserunt.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/facilities/AC.svg" width="40px">
            <h5 class="m-0 ms-3">Air Conditioner</h5>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ratione modi hic eveniet odit vero iste deserunt.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/facilities/WaterHeater.svg" width="40px">
            <h5 class="m-0 ms-3">Water Heater</h5>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ratione modi hic eveniet odit vero iste deserunt.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/facilities/Massage.svg" width="40px">
            <h5 class="m-0 ms-3">Massage Relaxing</h5>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ratione modi hic eveniet odit vero iste deserunt.</p>
        </div>
      </div>
    </div>
  </div>



  <?php require ('inc/footer.php'); ?>

</body>

</html>