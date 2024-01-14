<?php

//$query = "SELECT * FROM Product_Categories";
//$query = DB::connect()->prepare($query);
//$query->execute();
//dd($query->fetchAll());
header("Access-Control-Allow-Origin: 'art-zebra.com.ua' ");
function dbGet (){
    $sql = "SELECT * FROM Product_Categories";
    $query = DB::connect()->prepare($sql);
    $query->execute();

    $result = ($query->fetchAll());
    return $result ?? [];
}
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $username = isset($_GET['username']) ? $_GET['username'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';
    if ($username === DB_USER && $password === DB_PASSWORD){
        $final = dbGet();
        echo json_encode($final);
    }else{
        echo "Error";
    }
}

