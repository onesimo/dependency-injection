<?php
require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$list = $container['ServiceProduct']->list();

require_once('list.product.php');

/*
$container['date'] = $container->factory(function(){
	return new \DateTime;
});

var_dump($container['date']);

echo "<br/>";
echo "<br/>";
sleep(2);
var_dump($container['date']);
*/