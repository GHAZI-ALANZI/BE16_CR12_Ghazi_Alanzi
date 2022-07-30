<?php


if (isset($_FILES["img"])) {
   


$filepath = $_FILES['img']['tmp_name'];
$fileSize = filesize($filepath);
$fileinfo = finfo_open(FILEINFO_MIME_TYPE);
$filetype = finfo_file($fileinfo, $filepath);

if ($fileSize === 0) {
    die("The file is empty.");
}

if ($fileSize > 5000000) { 
    die();
}
if (empty($filetype) ) { 
    echo"hhhhhhhh";
}

$allowedTypes = [
   'image/png' => 'png',
   'image/jpeg' => 'jpg',
   'image/webp' => 'webp'
];

if (!in_array($filetype, array_keys($allowedTypes))) {
    die();
}

$filename = basename($filepath); 
$extension = $allowedTypes[$filetype];
$targetDirectory = '../picture/'; 

$newFilepath = $targetDirectory . "/" . $filename . "." . $extension;

if (!copy($filepath, $newFilepath)) { 
    die();
}
unlink($filepath); // Delete the temp file
}