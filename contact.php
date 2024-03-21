<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking - CONTACT</title>
    <?php require ('inc/links.php'); ?>

</head>

<body class="bg-light">

    <?php require ('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center"> CONTACT US </h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis, tenetur, harum corrupti <br> optio nulla error ipsam cum exercitationem libero,
            sunt totam voluptatum iste necessitatibus.
            Sequi nemo at quos est esse.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d513649950.15383714!2d106.62966376762692!3d10.823697408481108!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1710473136812!5m2!1svi!2s"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5 class="mt-4">Address</h5>
                    <a href="https://maps.app.goo.gl/QEAn5sPDsXw1ToRj7" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> Quận vào tym ems
                    </a>

                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +84123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +84123456789
                    </a>
                    <br>
                    <a href="tel: +84123456789" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +84987654321
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: cuavaotymEms@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> cuavaotymEms@gmail.com
                    </a>

                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                        <i class="bi bi-youtube me-2"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                        <i class="bi bi-facebook me-2"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark text-decoration-none">
                        <i class="bi bi-instagram me-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounder shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <!-- Đây là trường nhập liệu email. Sử dụng type="email" giúp trình duyệt kiểm tra xem giá trị nhập vào có đúng định dạng email hay không -->
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <!-- Đây là trường nhập liệu email. Sử dụng type="email" giúp trình duyệt kiểm tra xem giá trị nhập vào có đúng định dạng email hay không -->
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Submit</label>
                            <!-- Đây là trường nhập liệu email. Sử dụng type="email" giúp trình duyệt kiểm tra xem giá trị nhập vào có đúng định dạng email hay không -->
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <!-- Đây là trường nhập liệu email. Sử dụng type="email" giúp trình duyệt kiểm tra xem giá trị nhập vào có đúng định dạng email hay không -->
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php require ('inc/footer.php'); ?>


</body>

</html>