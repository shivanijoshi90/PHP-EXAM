<?php


header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");

include "../../config/config.php";

$config = new config();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $movie_id = $_POST['movie_id'];

    $res = $config->insertUpcomingMovie($name,$movie_id);

    if($res){

        $arr['data'] = "Upcoming Movie Inserted Sucessfully...";
        http_response_code(201);
    }else{
        $arr['err'] = "Upcoming Movie Insertion Failed...";
    }

}else{

    $arr['err'] = "only for POST HTTP Request Method is Allowed...";
}

echo json_encode($arr);










?>