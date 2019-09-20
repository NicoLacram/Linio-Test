<?php
require('vendor/autoload.php');
use Linio\Challenge;

$results = new Challenge();
$results->test(1,100);

foreach ($results as $result){
    echo json_encode($result);
}




?>