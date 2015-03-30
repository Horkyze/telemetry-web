<?php 


require 'vendor/autoload.php';

// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=dbs user=postgres password=postgres")
    or die('Could not connect: ' . pg_last_error());



$app = new \Slim\Slim();
$app->get('/getdb', function () {
    echo "Hello, name";
});

$app->get('/setdb/:id', function ($id) {
    echo "upade where id = $id";
});



$app->run();



 ?>