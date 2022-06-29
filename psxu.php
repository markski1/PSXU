<?php

/*
 / PSXU v0.2 by Markski
 /
 / immarkski@proton.me | mrks.cf | github.com/markski1 
*/

require_once "config.php";

if (empty($_FILES) && empty($_POST)) {
	exit("Error: No file received. Check your sharex settings, or uploaded file might be larger than allowed by php.ini");
} else if ($_FILES['fileupload']['error'] === 1) {
	exit("Error: Uploaded file is larger than allowed by your php.ini");
}

if (!isset($_POST['key']) || $_POST['key'] !== $secret_key) {
	exit("Error: Wrong or no key provided.");
}

$ext = end((explode(".", $_FILES["fileupload"]["name"])));

// Don't allow listed extensions to upload
if (in_array(strtolower($ext), $restricted_extensions)) {
	exit("Error: file extension not allowed");
}

if ($randlen < 2) {
	exit("Error: randlen cannot be less than 3");
}
while (true) {
	$filename = "/" . RandomString($randlen) . "." . $ext;
	if (!file_exists(getcwd() . $filename)) {
		break;
	}
}

$target = getcwd() . $filename;

if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target)) {
	echo $url . $filename;
} else {
	exit("Error: File was uploaded succesfully, but failed to relocate it afterwards. Please check directory permissions.");
}


// funcs

function RandomString($len)
{
	$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$randomString = "";
	for ($i = 0; $i < $len; $i++) {
		$randomString .= $characters[rand(0, 61)];
	}
	return $randomString;
}
