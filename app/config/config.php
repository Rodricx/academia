<?php 
 function dd($value){
    die(var_dump($value));
 }

 function validate(array $value, $msg, $classField, $classAlert){
    foreach($value as $val){
        if(empty($val)){
            echo json_encode([
                "msg" => $msg,
                "class" => $classAlert,
                "css"  => $classField
            ]);
            die;
        }
    }
 }
?>