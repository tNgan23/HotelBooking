<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking - HOME</title>
  <?php require ('inc/links.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>
<!-- lon -->
<body class="bg-light">
  <?php require ('inc/header.php'); ?>

  <!-- Quảng Cáo -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <?php
          $res = selectAll('carousel');
          while ($row = mysqli_fetch_assoc($res)) 
            {
                $path = CAROUSEL_IMG_PATH;
                echo <<<data
                <div class="swiper-slide">
                  <img src="$path$row[image]" class="w-100 d-block" />
                </div>
            data;
            }
        ?>
        
      </div>
    </div>
  </div>

  <!-- Check Booking -->

  <div class="container  availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label " style="font-weight:500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label " style="font-weight:500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label " style="font-weight:500;">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-2 mb-3">
              <label class="form-label " style="font-weight:500;">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Simple Room Name</h5>
            <h6 class="mb-4">500$ per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6> <!--Các tính năng -->
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                2 Room <!--phòng ngủ -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                1 Bathroom <!--phòng tắm -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                1 Balcony <!--ban công -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6> <!--Các tiện nghi -->
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Televisiom
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                AC <!--Máy lạnh (Air Conditioning) -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Room heater <!--bình nóng lạnh -->
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                5 Adult
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                3 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Simple Room Name</h5>
            <h6 class="mb-4">500$ per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6> <!--Các tính năng -->
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                2 Room <!--phòng ngủ -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                1 Bathroom <!--phòng tắm -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                1 Balcony <!--ban công -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6> <!--Các tiện nghi -->
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                AC <!--Máy lạnh (Air Conditioning) -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Room heater <!--bình nóng lạnh -->
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                5 Adult
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                3 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Simple Room Name</h5>
            <h6 class="mb-4">500$ per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6> <!--Các tính năng -->
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                2 Room <!--phòng ngủ -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                1 Bathroom <!--phòng tắm -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                1 Balcony <!--ban công -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6> <!--Các tiện nghi -->
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Televisiom
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                AC <!--Máy lạnh (Air Conditioning) -->
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                Room heater <!--bình nóng lạnh -->
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                5 Adult
              </span>
              <span class="badge roundes-pill bg-light text-dark text-wrap">
                3 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Romm >>></a>
      </div>
    </div>
  </div>
  <!-- OUR FACILITIES -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/Wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/Television.svg" width="80px">
        <h5 class="mt-3">Television</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/Radio.svg" width="80px">
        <h5 class="mt-3">Radio Music</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/AC.svg" width="80px">
        <h5 class="mt-3">Air Conditioner</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/WaterHeater.svg" width="80px">
        <h5 class="mt-3">Water Heater</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>

      </div>
    </div>
  </div>

  <!-- TESTIMONIALS -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="container">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="image/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nobis placeat, quidem adipisci, explicabo ratione deleniti minima ab veritatis vel, doloremque incidunt!
            Vel rem sapiente ipsam explicabo eum consequatur incidunt voluptate.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="image/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user2</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nobis placeat, quidem adipisci, explicabo ratione deleniti minima ab veritatis vel, doloremque incidunt!
            Vel rem sapiente ipsam explicabo eum consequatur incidunt voluptate.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="image/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user3</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nobis placeat, quidem adipisci, explicabo ratione deleniti minima ab veritatis vel, doloremque incidunt!
            Vel rem sapiente ipsam explicabo eum consequatur incidunt voluptate.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="image/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user3</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nobis placeat, quidem adipisci, explicabo ratione deleniti minima ab veritatis vel, doloremque incidunt!
            Vel rem sapiente ipsam explicabo eum consequatur incidunt voluptate.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>

    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>

    </div>
  </div>

  <!-- Reach us -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>
            Call us
          </h5>
          <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+
            <?php echo $contact_r['pn1'] ?>
          </a>
          <br>

          <?php
          if ($contact_r['pn2'] != '') {
            echo <<<data
              <a href="tel: +84028520583" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+84028520583
              </a>
            data;
          }
          ?>

        </div>
            
        <div class="bg-white p-4 rounded mb-4">
          <h5>
            Follow us
          </h5>
          <?php 
            if($contact_r['ytb']!=''){
              echo <<<data
                <a href="$contact_r[ytb]" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-youtube  me-2"></i>Youtube</span>
              </a>
              data;
            }
          ?>


          <br>
          <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-2"></i>Facebook</span>
          </a>
          <br>
          <a href="<?php echo $contact_r['insta']?>" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-2"></i>Instagram</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer design -->

  <?php require ('inc/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      }
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3, // Giả sử bạn muốn hiển thị 3 slides tại key 1024
        },

      }
    });
  </script>
</body>

</html>