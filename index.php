<?php

if(isset($_GET) && isset($_GET['color']) && file_exists('./img/y_'.$_GET['color'].'.png')){

}

$file_list = glob('./img/*');
$file = $file_list[(int)array_rand($file_list)];

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime_type = $finfo->file($file);

header('Content-Type: '.$mime_type);
readfile($file);