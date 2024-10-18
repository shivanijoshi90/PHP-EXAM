<?php

header("Access-Control-Allow-Method: PUT");
header("Content-Type: application/json");

include "../../config/config.php";

$config = new config();

if($_SERVER['REQUEST_METHOD']=='PUT'   || $_SERVER['REQUEST_METHOD']=='PATCH'){

    $input = file_get_contents("php://input"); 

    parse_str($input, $_UPDATE);
    
    
    $name = $_UPDATE['name'];
    $time = $_UPDATE['time'];
    $id = $_UPDATE['id'];

    $res = $config->updateMovie($name,$time, $id);


    if($res){

        $arr['data'] = "Movie Updated Sucessfully...";
        http_response_code(201);
    }else{
        $arr['err'] = "Movie Updation Failed...";
    }
}else{

    $arr['err'] = "only for PUT HTTP Request Method is Allowed...";



}













?>