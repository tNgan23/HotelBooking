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
  <link rel="stylesheet" href="style.css">


</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel Booking</a>
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

  <!-- Rooms -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<!-- 1:11:38 -->
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
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Romm >>></a>
      </div>
    </div>

    <br><br><br>
    <br><br><br>



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
    </script>




</body>

</html>