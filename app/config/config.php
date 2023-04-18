<?php 
 function dd($value){
    die(var_dump($value));
 }

 function isEmpty(array $value, $msg, $classField, $classAlert, $fieldSearch, $addField){

    $fields = [];
    $contentField = [];

    foreach($value as $key => $val){
        if(empty($val[$fieldSearch])){
            array_push($fields, $val[$addField]);
        } else {
            $contentField[$val[0]] =  $val[1];
        }
    }

    if(!empty($fields)){
        echo json_encode([
            "msg" => $msg,
            "class" => $classAlert,
            "css"  => $classField,
            "field" => $fields
        ]);
        die;
    } else {
        return $contentField;
    }
 }

 function validate($array){

    $validate = [];
    foreach($array as $key => $value){

        switch($key){
            case "text":
                $validate[$key] = filter_var($value, FILTER_SANITIZE_STRING);
                break;
            case "password":
                $validate[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }
    }
    return (object) $validate;
 }
?>