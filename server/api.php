<?php 


require 'vendor/autoload.php';
require 'QueryBuilder.php';
require 'DB.php';



$app = new \Slim\Slim();
$app->db = new DB();

$app->response->headers->set('Content-Type', 'application/json');



$app->get('/getDevices', function () use ($app){
	//$app = \Slim\Slim::getInstance();
    $query = 'SELECT * FROM device';
    //var_dump( pg_fetch_array( pg_query($query) ));
    //var_dump( $app->db->query($query) ); 
    $app->response->setBody( json_encode( $app->db->query($query)->fetchAll(), JSON_PRETTY_PRINT ) );

});

$app->get('/getDeviceData/:id', function ($deviceId) {
    $query = 'SELECT * FROM device WHERE id=' . pg_escape_string($deviceId) ; 
});



$app->get('/setdb/:id', function ($id) {
    echo "upade where id = $id";
});



$app->run();



 ?>