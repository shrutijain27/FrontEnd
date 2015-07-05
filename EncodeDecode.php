<?php

    //load json file
    $data = file_get_contents('./Catalog_data.json');

    //decode json data
    $array = json_decode($data, true);
    $id = 1;

    foreach ($array as &$element) {
        //$element["_id"]=$id++;
        $a = array("_id"=>$id++) + array("_type"=>'data');
        $element= array("index"=>$a) + $element;

    }
var_dump($array);

    $new_file  = json_encode($array);
    file_put_contents('formatted_data2.json',$new_file);


?>



