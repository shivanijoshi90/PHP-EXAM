<?php


header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");

include "../Config/config.php";

$config = new config();

if($_SERVER['REQUEST_METHOD']=='POST'){

         $name = $_POST['name'];
        $email = $_POST['email'];
       
        $res = $config->insertuser($name,$email);
        if($res){

            $arr['data'] = "user Inserted Sucessfully...";
            http_response_code(201);
        }else{
            $arr['err'] = "user Insertion Failed...";
        }
    }
else{

    $arr['err'] = "only for POST HTTP Request Method is Allowed...";
}

echo json_encode($arr);













?>