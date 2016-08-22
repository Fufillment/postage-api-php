<?php

namespace Fulfillment\Postage\Models\Request;

use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BaseShipment;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class Shipment extends BaseShipment implements Validatable {
	use ValidatableBase;
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->weightType     = ArrayUtil::get($data['weightType']);
		$this->weight         = ArrayUtil::get($data['weight']);
		$this->description    = ArrayUtil::get($data['description'], 'E-Commerce Online Purchase');
		$this->toAddress      = ArrayUtil::get($data['toAddress']);
		$this->packaging      = ArrayUtil::get($data['packaging']);
		$this->commodityItems = ArrayUtil::get($data['commodityItems']);
	}

	public function getValidationRules()
	{

		return [
			v::attribute('weightType', v::notEmpty()->string()),
			v::attribute('weight', v::notEmpty()->numeric()),
			v::attribute('toAddress', v::instance('\Fulfillment\Postage\Models\Request\Contracts\Address')->callback([$this->getToAddress(), 'validate'])),
			v::attribute('packaging', v::oneOf(v::nullValue(), v::instance('Fulfillment\Models\Postage\Request\Contracts\Packaging'))),
			v::attribute('commodityItems', v::arr()),
		];

	}


}