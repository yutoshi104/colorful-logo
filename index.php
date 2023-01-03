<?php

$color_list = [
    "black",
    "blue",
    "bluepurple",
    "brown",
    "gray",
    "green",
    "leaf",
    "lightgreen",
    "orange",
    "pink",
    "purple",
    "red",
    "silver",
    "skyblue",
    "white",
    "yellow",
];

$seed = isset($_GET['seed']) && is_numeric($_GET['seed']) ? (int)$_GET['seed'] : null;
$color = isset($_GET['color']) && in_array($_GET['color'],$color_list) ? $_GET['color'] : null;

if($color===null){
    $file_list = glob('./img/*');
    $file = $file_list[(int)array_rand($file_list)];
}else{
    $file = './img/y_'.$color.'.png';
}

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime_type = $finfo->file($file);

header('Content-Type: '.$mime_type);
readfile($file);