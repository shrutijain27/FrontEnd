<?php
/**
 * Created by PhpStorm.
 * User: shruti
 * Date: 1/7/15
 * Time: 11:14 AM
 */

require_once  '/vendor/autoload.php';
$es = new Elasticsearch\Client([ 'host' => ['localhost:9200']
            ]);
                 //create a connection to document in es

?>








