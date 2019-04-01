<?php

if (isset($_POST['submit'])) {

//    $image_tmp = $_FILES['fileup']['tmp_name'];
//    $fi = finfo_open(FILEINFO_MIME_TYPE);
//    $mime = (string)finfo_file($fi, $image_tmp);
//    if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');
//    $image = $_FILES['fileup']['name'];
//    move_uploaded_file($image_tmp, "data/images/$image");


    //require 'sendmail.php';


    $app['database']->insert('customer', [

        'name' => $_POST['name'],

        'surname' => $_POST['surname'],

        'email' => $_POST['email'],

        'photo' => $_FILES['fileup']['name'],

        'comment' => $_POST['message']

    ]);

}

//require 'views/index.view.php';






