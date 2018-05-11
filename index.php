<?php

require_once('/vendor/austinb/gameq/src/GameQ/Autoloader.php');

// Define the servers you wish you query
$servers = [
	[
		'id' => 'AlphaSquad Arma 3',
		'type' => 'arma3',
		'host' => '207.182.138.242:2302',
		'options' => [
			'query_port' => 2303
		]
	],
	[
		'type' => 'teamspeak3',
		'host' => '127.0.0.1:9987',
		'options' => [
			'query_port' => 10011
		]
	],
];

$GameQ = new \GameQ\GameQ(); // or $GameQ = \GameQ\GameQ::factory();
$GameQ->addServers($servers);
$GameQ->setOption('timeout', 5); // seconds


$results = $GameQ->process();
print_r($results);

?>
