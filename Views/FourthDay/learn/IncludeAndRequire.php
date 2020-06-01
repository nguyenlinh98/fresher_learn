<?php
// Import file import.php
require_once "import.php";
 require_once "import.php";
show();
$exception = new Exception('Lỗi do số nhỏ hơn 0');
throw $exception;
$path = "import.php";
if(file_exists($path)){
    require $path;
}else{
    die("{$path} không tồn tại");
}