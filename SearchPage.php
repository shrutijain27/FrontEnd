<?php
require_once 'init.php';
if(isset($_GET['q']))
{    $q = $_GET['q'];

    $params['index'] = 'index';
    $params['type']  = 'data';

    //query
    $params['body']['query']['match']['model'] =  $q;

    //filter


    //call search() in elasticsearch
    $query  = $es->search($params);

    //store results of query in $results
      if($query['hits']['total'] >1)
        {
            $results = $query['hits']['hits'];
        }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Elastic Search |es </title>
</head>


<body>

<form name="form1" action="SearchPage.php"    method = "get" >
    <input name = "q" type ="text" />
    <input type = "submit" name ="submit" value = "search" />
</form>

<?php
if(isset($results))
{
    foreach($results as $r)
    {

?>
         <div class="results">
             <p>
                <img class = "image" src = "<?php echo  $r['_source']['image'][0] ?> "/>
                <div class="Offer"><?php echo $r['_source']['offer'][0] ; ?></div>

                <a href="Details.php?id=<?php echo $r['_id']; ?>"><?php echo $r['_source']['standard_url']; ?></a>

             </p>
        </div>
<?php

    }
}
?>

</body>
</html>

