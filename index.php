<?php 

require('class/Client.php');
require('class/Pub.php');
require('class/Table.php');

$client = new Client("Pepe");
$pub = new Pub();
$table = new Table(1,3);

var_dump($table);
