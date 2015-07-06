<?php

    //load json file
    $data = file_get_contents('./Catalog_data.json');

    //decode json data
    $array = json_decode($data, true);
    $id = 1;

$fp = fopen('./changed.json', 'a');
    foreach ($array as &$element) {
        //$element["_id"]=$id++;
        $a = array("_id"=>$id++) + array("_type"=>'data');
        $element= array("index"=>$a) + $element;
        fwrite($fp, json_encode($element));
        fwrite($fp,"\n");
    }
    fclose($fp);

	//var_dump($array);

   /*
	foreach ($array as $element)
    {
        $new_element  = json_encode($element);
        fwrite($fp, $new_element);

	}

fclose($fp);
   */

//$new_file  = json_encode($array,JSON_PRETTY_PRINT);
//    file_put_contents('formatted_data3.json',$new_file);

?>



