<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded. Here is his details: <br>";
        echo exec("exiftool -a -u -g1 -json uploads/" . $_FILES["fileToUpload"]["name"]);
        exec("exiftool -a -u -g1 -json uploads/" . $_FILES["fileToUpload"]["name"], $my_array);
        var_dump($_FILES["fileToUpload"]["name"]);
        var_dump(basename($_FILES["fileToUpload"]["name"]));
        exec("exiftool -xmp -b ".$_FILES["fileToUpload"]["name"]." -o ../data/xmp/".basename($_FILES["fileToUpload"]["name"]).".xmp");
        $f = fopen("../data/".basename($_FILES["fileToUpload"]["name"]).".json", "w");
        $string = "";
        foreach ($my_array as $item){
            fwrite($f, print_r($item, true));
            $string .= $item;
        }
        fclose($f);
        $metadata = object_to_array(json_decode($string))[0];
        var_dump($my_array);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

function object_to_array($obj) {
    if (is_object($obj))
        $obj = (array) $obj;
    if (is_array($obj)) {
        $new = array();
        foreach ($obj as $key => $val) {
            $new[$key] = object_to_array($val);
        }
    } else
        $new = $obj;
    return $new;
}
