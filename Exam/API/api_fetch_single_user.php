<?php


header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");

include "../Config/config.php";

$config = new config();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];

    $res =$config->fetchSingleUser($id);

    $result = mysqli_fetch_assoc($res);
    if($result){
        $arr['data'] = $result;
    }else{
        $arr['err'] = "User Not Found...";
    }

}else{

        $arr['err'] = "only for GET HTTP Request Method is Allowed...";
    }

echo json_encode($arr);










?>