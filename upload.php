<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
header("Access-Control-Allow-Origin: *");
$uploads_dir = 'images/upload/';
$uploadfile = $uploads_dir . basename($_FILES['image']['name']);
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo $uploadfile;
} else {
    echo "Error";
}


/*if (move_uploaded_file($_FILES['image']['tmp_name'], "/images")) {
    print "Received {$_FILES['image']['name']} - its size is {$_FILES['image']['size']}";
} else {
    print "Upload failed!";
}*/
?>