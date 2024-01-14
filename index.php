<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

const BASE_DIR = __DIR__;

require_once  BASE_DIR . '/vendor/autoload.php';
require_once BASE_DIR . '/configs/constants.php';

try {
    require_once BASE_DIR . '/configs/DB.php';
    require_once APP_DIR . 'index.php';
    require_once BASE_DIR . '/configs/router.php';
    require_once BASE_DIR . '/requests/request.php';

//    $query = "SELECT * FROM Product_Brand";
//    $query = DB::connect()->prepare($query);
//    $query->execute();
//    dd($query->fetchAll());

} finally {

}
//catch (Exception $exception){
//    dd($exception->getCode() . ' - ' . $exception->getMessage() . '"');
////    echo '<pre>';
////    var_dump($exception);
//   die();
//}

