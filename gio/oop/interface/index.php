<?php

require_once __DIR__ . '/../vendor/autoload.php';

$collector = new \App\CollectionAgency();
$service = new \App\DebtCollectionService();

echo $collector->collect(100) . PHP_EOL;
echo $service->collectDebt($collector) . PHP_EOL;