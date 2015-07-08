<?php

// _author_ Shruti Jain

$data = file_get_contents('./Catalog_data.json');       //load json file
$array = json_decode($data, true);                      //decode json data
$id = 1;

$fp = fopen('./Formatted_data.json', 'a');                  //open json file in append mode
foreach ($array as &$element) {
    //$element["_id"]=$id++;
    $a = array("_id"=>$id++) + array("_type"=>'data'); //add id and type field
    $element= array("index"=>$a) + $element;            //add new fields in beginning
    fwrite($fp, json_encode($element));                 //write encoded element to another file
    fwrite($fp,"\n");                                   //write newline char in end of every element
}
fclose($fp);                                            //close json file


?>



