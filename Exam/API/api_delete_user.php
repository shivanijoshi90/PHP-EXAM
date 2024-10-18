<?php

header("Access-Control-Allow-Method: DELETE");
header("Content-Type: application/json");

include "../Config/config.php";

$config = new config();

if($_SERVER['REQUEST_METHOD']=='DELETE'){

    $id = $_GET['id'];

    $res = $config->deleteuser($id);
    if($res){
        $arr['data'] = "user Deleted Sucessfully...";
        http_response_code(201);
    }else{
        $arr['err'] = "user Deletion Failed...";
    }
}else{

    $arr['err'] = "only for DELETE HTTP Request Method is Allowed...";
}

echo json_encode($arr);












?>