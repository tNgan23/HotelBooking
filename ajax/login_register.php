<?php
require ('../Admin/inc/db_config.php');
require ('../Admin/inc/essentials.php');
require ('../inc/sendgrid/sendgrid-php.php');


function send_mail($email, $name, $token)
{
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("trucnganhuynh001@gmail.com", "HOTEL BOOKING");
    $email->setSubject("Account Verification Link");

    $email->addTo($email, $name);


    $email->addContent(
        "text/html",
        "Click the link to comfirm you email: <br> 
        <a href='" . SITE_URL . "email_comfirm.php?email=$email&token=$token" . "'>
        CLICK ME
        </a>
        "
    );
    $sendgrid = new \SendGrid(getenv(SENGIRD_API_KEY));

    if ($sendgrid->send($email)) {
        return 1;
    } else {
        return 0;
    }
}


if (isset($_POST['register'])) {
    $data = filteration($_POST);

    // khop mat khau va nhp lai mat khau

    if ($data['pass'] != $data['cpass']) {
        echo 'pass_mismatch';
        exit;
    }

    // kiem tra nguoi dung co thoat hay khong

    $u_exist = select(
        "SELECT * FROM `user_cred` WHERE `email`=? AND `phonenum`=? LIMIT 1",
        [$data['email'], $data['phonenum']],
        "ss"
    );

    if (mysqli_num_rows($u_exist) != 0) {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_allready';
        exit;


    }

    // cap nhat anh nguoi dung tren server

    $img = uploadUserImage($_FILES['profile']);

    if ($img == 'inv_img') {
        echo 'inv_img';
        exit;
    } else if ($img == 'upd_failed') {
        echo 'upd_failed';
        exit;
    }


    // gửi liên kết xác nhận đến email của người dùng


    $token = bin2hex(random_bytes(16));

    if(!send_mail($data['$email'], $data['name'], $token)){
        echo 'mail_failed';
        exit;
    }

    $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);

    $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `dob`, 
    `dob`, `profile`, `password`, `token`) VALUES (?,?,?,?,?,?,?,?)";

    $values = [$data['name'],$data['email'],$data['address'],$data['phonenum'],$data['dob'],$img,$enc_pass,$token];

   if (insert($query,$values,'ssssssss')){
    echo 1;
   }else{
    echo 'ins_failed';
   }
}



?>