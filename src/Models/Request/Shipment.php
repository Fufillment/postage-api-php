<?php

namespace Fulfillment\Postage\Models\Request;

use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BaseShipment;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;
use Fulfillment\Postage\Models\Request\Contracts\Address;
use Fulfillment\Postage\Models\Request\Contracts\Packaging;

class Shipment extends BaseShipment implements Validatable {
	use ValidatableBase;
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->weightType     = ArrayUtil::get($data['weightType']);
		$this->weight         = ArrayUtil::get($data['weight']);
		$this->description    = ArrayUtil::get($data['description'], 'E-Commerce Online Purchase');
		$this->toAddress      = ArrayUtil::get($data['toAddress']);
		$this->returnAddress = ArrayUtil::get($data['returnAddress']);
		$this->fromAddress = ArrayUtil::get($data['fromAddress']);
		$this->packaging      = ArrayUtil::get($data['packaging']);
		$this->commodityItems = ArrayUtil::get($data['commodityItems']);
	}

	public function getValidationRules()
	{

		return [
			v::attribute('weightType', v::stringType()),
			v::attribute('weight', v::notEmpty()->numeric()),
			v::attribute('toAddress', v::instance(Address::class)->callback([$this->getToAddress(), 'validate'])),
			v::attribute('fromAddress', v::instance(Address::class)->callback([$this->getToAddress(), 'validate']), false),
			v::attribute('returnAddress', v::instance(Address::class)->callback([$this->getToAddress(), 'validate']), false),
			v::attribute('packaging', v::oneOf(v::nullType()(), v::instance(Packaging::class))),
			v::attribute('commodityItems', v::arrayVal()),
		];

	}


}