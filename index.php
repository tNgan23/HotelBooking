<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/common.css">

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

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">HOTEL BOOKING</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">About</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i> User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <!-- Đây là trường nhập liệu email. Sử dụng type="email" giúp trình duyệt kiểm tra xem giá trị nhập vào có đúng định dạng email hay không -->
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <!-- Trường nhập mật khẩu. Sử dụng type="password" để ẩn văn bản nhập vào và thay thế bằng các ký tự đại diện (*). -->
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill"></i>
              User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge roundes-pill bg-light text-dark mb-3 text-wrap lh-base">
              Note: Your details must match with your ID (Aadhaar card, passport, driving license, ect.)
              that will be required during check-in.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>

              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Quảng Cáo -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-1.jpg" class="w-100 d-block" />
        </div>

        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-3.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-4.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-5.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-6.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-7.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-8.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-9.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-10.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-11.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/carousel/carousel-hotel-2.jpg" class="w-100 d-block" />
        </div>
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

  </div>

  <!-- Reach us -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125404.29923661126!2d106.78985055000001!3d10.820161500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d85e042bf04b%3A0xbb26baec1664394d!2zVGjhu6cgxJDhu6ljLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1710515179676!5m2!1svi!2s"
          loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>
            Call us
          </h5>
          <a href="tel: +84028520583" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+84028520583
          </a>
          <br>
          <a href="tel: +84028520583" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+84028520583
          </a>
        </div>

        <div class="bg-white p-4 rounded mb-4">
          <h5>
            Follow us
          </h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-youtube  me-2"></i>Youtube</span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-2"></i>Facebook</span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-2"></i>Instagram</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer design -->

  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">HOTEL BOOKING</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Magni suscipit libero id unde possimus eaque a nobis repudiandae magnam delectus. Quae rem exercitationem
          possimus fugit?
          Deserunt tenetur neque consequuntur nam.

        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">
          Links
        </h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">
          Follow us
        </h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-youtube me-2"></i>Youtube
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-2"></i>Facebook
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">
          <i class="bi bi-instagram me-2"></i>Instagram
        </a>
      </div>
    </div>
  </div>
  <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Team-NLTT</h6>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

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