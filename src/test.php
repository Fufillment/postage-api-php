<?php

namespace Fulfillment\Postage;

use Fulfillment\Postage\Models\Request\Address;
use Fulfillment\Postage\Models\Request\CommodityItem;
use Fulfillment\Postage\Models\Request\Postage;
use Fulfillment\Postage\Models\Request\Shipment;
use Fulfillment\Postage\Models\Request\ReferenceFields;

require __DIR__ . '/../vendor/autoload.php';

$comItem = new CommodityItem([
	'fromCountry' => 'US',
	'currency'    => 'USD',
	'weightType'  => 'OZ',
	'code'        => 'asku',
	'description' => 'fsdfd',
	'quantity'    => 1,
	'unitValue'   => 1.00,
	'unitWeight'  => 1,
]);

$referenceFields = new ReferenceFields([
	'shipperReference'   => 1111,
	'consigneeReference' => '2222',
	'reference1'         => '3333',
]);

$address = new Address([
	'name'          => 'James Weston',
	'street1'       => '31 Sandy Beach Rd',
	'city'          => 'Auburn',
	'stateProvince' => 'ME',
	'postalCode'    => '04210',
	'country'       => 'US',
	'phone'         => '9121111111',
]);

$shipment = new Shipment([
	'weightType'     => 'OZ',
	'weight'         => 1,
	'toAddress'      => $address,
	'commodityItems' => [$comItem],
]);

$postageObj = new Postage([
	'shipper'         => 'FDC_SAV_01',
	'service'         => 'USPS_PriorityMail',
	'referenceFields' => $referenceFields,
	'shipment'        => $shipment,
]);


$client = new PostageClient(__DIR__ . '/../');


try
{
	$postageResponse = $client->postage->postageCreate($postageObj, true);
	var_dump($postageResponse);
}
catch (\Exception $ex)
{
	print_r($ex);
}

