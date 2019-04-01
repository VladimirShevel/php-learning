<?php
function test_text_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function is_image(){
    $image_tmp = $_FILES['fileup']['tmp_name'];
    $fi = finfo_open(FILEINFO_MIME_TYPE);
    $mime = (string)finfo_file($fi, $image_tmp);
    if (strpos($mime, 'image') === false) {
        echo('Можно загружать только изображения.');
        return false;
    }  else {
        return true;
    }
}

if (isset($_POST['submit'])) {
    if (is_image()){
        move_uploaded_file($_FILES['fileup']['tmp_name'],
            "data/images/{$_FILES['fileup']['name']}");

        $image = $_FILES['fileup']['name'];
        $name = test_text_input($_POST['name']);
        $surname = test_text_input($_POST['surname']);
        $email = test_text_input($_POST['email']);
        $message = test_text_input($_POST['message']);

        App::get('database')->insert('customer', [
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'photo' => $image,
            'comment' => $_POST['message']
        ]);

        require 'sendmail.php';
    }
}
require 'views/index.view.php';