<?php

require_once 'init.php';
if(isset($_GET['q']))
{    $q = $_GET['q'];


    $params['index'] = 'laptopcatalog';
    $params['type']  = 'data';
    $params['id'] = 'AU5essmFay6lZW87s5-a';
    $params['body']['query']['bool']['must'] = array('match' => array('model' => $q));

    $query  = $es->search($params);

    echo '<pre>', print_r($query), '</pre>';
    //   die();
}
/*        if($query['hits']['total'] >1)
        {
            $results = $query['hits']['hits'];

        }

}*/

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Elastic Search |es </title>
</head>


<body>

<form name="form1" action="homepage.php"    method = "get" >
    <input name = "q" type ="text" />
    <input type = "submit" name ="submit" value = "search" />
</form>



</body>
</html>

