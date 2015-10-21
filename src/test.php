<?php

namespace Fulfillment\OMS;


use Fulfillment\OMS\Tests\DataUtility;

require __DIR__.'/../vendor/autoload.php';

$oms = new OMS(__DIR__.'/../');

//$orders = $oms->orders->getOrders('2015-2-1','2015-2-2',['XDEBUG_SESSION_START' => 'apinext', 'merchantIds' => 50133]);

//$newOrder = new Order(DataUtility::requestOrder());
//$oms->orders->createOrder($newOrder, ['XDEBUG_SESSION_START' => 'apinext']);

$order = $oms->orders->getOrder(7031961);

var_dump($order);
//$f = $order;