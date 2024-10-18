<?php

header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");

include "../../Config/config.php";

$config = new config();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $time -> $_POST['time'];

    $res = $config->insertLiveMovie($name,$time);

    if($res){

        $arr['data'] = "Movie Inserted Sucessfully...";
        http_response_code(201);
    }else{
        $arr['err'] = "Movie Insertion Failed...";
    }

}else{

    $arr['err'] = "only for POST HTTP Request Method is Allowed...";
}

echo json_encode($arr);












?>