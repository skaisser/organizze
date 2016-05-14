<?php

use Skaisser\Organizze\Adapter\GuzzleHttpAdapter;
use Skaisser\Organizze\Organizze;

require 'vendor/autoload.php';

$apiKey = '83504b965dfe5240643316529a43786dd0fa9575';
$username = 'kaiser@braip.com';
$adaptador = new GuzzleHttpAdapter($username, $apiKey);
$organizze = new Organizze($adaptador);

$categorias = $organizze->category()->getAll();
foreach ($categorias as $categoria) {
    var_dump($categoria);
    exit();
}
