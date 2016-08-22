<?php

namespace Fulfillment\Postage\Models\Request;

use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BaseCommodityItem;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class CommodityItem extends BaseCommodityItem implements Validatable {
	use ValidatableBase;
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->fromCountry  = ArrayUtil::get($data['fromCountry']);
		$this->currency     = ArrayUtil::get($data['currency']);
		$this->weightType   = ArrayUtil::get($data['weightType']);
		$this->code         = ArrayUtil::get($data['code']);
		$this->name         = ArrayUtil::get($data['name']);
		$this->description  = ArrayUtil::get($data['description'], 'E-Commerce Online Purchase');
		$this->quantity     = ArrayUtil::get($data['quantity']);
		$this->unitValue    = ArrayUtil::get($data['unitValue']);
		$this->unitWeight   = ArrayUtil::get($data['unitWeight']);
		$this->tariffNumber = ArrayUtil::get($data['tariffNumber']);
	}

	/**
	 * @return v[]
	 */
	public function getValidationRules()
	{
		return [
			v::attribute('fromCountry', v::oneOf(v::nullValue(), v::string()->notEmpty())),
			v::attribute('currency', v::string()->notEmpty()),
			v::attribute('weightType', v::string()->notEmpty()),
			v::attribute('code', v::string()->notEmpty()),
			v::attribute('name', v::string()->notEmpty()),
			v::attribute('quantity', v::numeric()->positive()->notEmpty()),
			v::attribute('unitValue', v::numeric()->positive()->notEmpty()),
			v::attribute('unitWeight', v::numeric()->positive()->notEmpty()),
			v::attribute('description', v::notEmpty()->string()),
		];
	}
}