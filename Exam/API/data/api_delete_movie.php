<?php

header("Access-Control-Allow-Method: DELETE");
header("Content-Type: application/json");

include "../../config/config.php";

$config = new config();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];

    $res =$config->deletemovie($id);

    if($res){
        $arr['data'] = "Movie Deleted Sucessfully...";
        http_response_code(201);
    }else{
        $arr['err'] = "Movie Delation Failed...";
    }
}else{

    $arr['err'] = "only for POST HTTP Request Method is Allowed...";
}

echo json_encode($arr);












?>