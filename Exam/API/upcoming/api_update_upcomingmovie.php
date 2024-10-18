<?php

header("Access-Control-Allow-Method: PUT");
header("Content-Type: application/json");

include "../../config/config.php";

$config = new config();

if($_SERVER['REQUEST_METHOD']=='PUT'   || $_SERVER['REQUEST_METHOD']=='PATCH'){

    $input = file_get_contents("php://input");

    parse_str($input, $_UPDATE);

    $name = $_UPDATE['name'];
    $movie_id = $_UPDATE['movie_id'];
    $id = $_UPDATE['id'];

    $res = $config->updateUpcomingMovie($name,$movie_id, $id);

    if($res){

        $arr['data'] = "Upcoming Movie Updated Sucessfully...";
        http_response_code(201);
    }else{
        $arr['err'] = "Upcoming Movie Updation Failed...";
    }

}else{

    $arr['err'] = "only for PUT HTTP Request Method is Allowed...";
}

echo json_encode($arr);













?>