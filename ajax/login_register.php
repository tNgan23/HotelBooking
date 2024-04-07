<?php
require ('../Admin/inc/db_config.php');
require ('../Admin/inc/essentials.php');

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
}



?>