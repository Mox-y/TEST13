<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

if (isset($_FILES["plaatje1"])){
	$extension = end(explode(".", $_FILES["plaatje1"]["name"]));
	$name = generateRandomString(10) . '.' . $extension;
	if(move_uploaded_file($_FILES["plaatje1"]["tmp_name"],  'upload/' . $name)){
	   $con->query("INSERT INTO `mygram_images`(`ID`, `name`, `created`) VALUES (NULL, '$name', NULL)");
       unset($_FILES["plaatje1"]);
    }
    header("Location: http://localhost/school/Periode3/BAP/mygram/");
}
