<?php 

require('class/Client.php');
require('class/Pub.php');

$client = new Client("Pepe");
$pub = new Pub();

var_dump($client);
