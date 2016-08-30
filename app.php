<?php

$loader = require __DIR__ . '/vendor/autoload.php';

use H\Sandbox\Product;
use H\Sandbox\Collection\Collection;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('sandbox_logger');
$logger->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::DEBUG));

$product1 = new Product('Pink Floyd', 'The Wall');
$logger->addInfo('Product 1', array((string) $product1));

$product2 = new Product('The Beatles', 'Abbey Road');
$logger->addInfo('Product 2', array((string) $product2));

$collection = new Collection();
$collection->set($product1);
$collection->set($product2);
$logger->addInfo('Product collection', array((string) $collection));

exit();
