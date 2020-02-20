<?php

namespace Fulfillment\Postage\Models\Request;

use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BaseAddress;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class Address extends BaseAddress implements Validatable {
	use ValidatableBase;
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->name          = ArrayUtil::get($data['name']);
		$this->company       = ArrayUtil::get($data['company']);
		$this->email         = ArrayUtil::get($data['email']);
		$this->phone         = ArrayUtil::get($data['phone']);
		$this->street1       = ArrayUtil::get($data['street1']);
		$this->street2       = ArrayUtil::get($data['street2']);
		$this->city          = ArrayUtil::get($data['city']);
		$this->stateProvince = ArrayUtil::get($data['stateProvince']);
		$this->postalCode    = ArrayUtil::get($data['postalCode']);
		$this->country       = ArrayUtil::get($data['country']);
	}

	public function getValidationRules()
	{
		return [
			v::attribute('name', v::notEmpty()->alnum('-.')),
			v::attribute('company', v::oneOf(v::nullType()(), v::stringType())),
			v::attribute('email', v::oneOf(v::nullType()(), v::email())),
			v::attribute('phone', v::oneOf(v::nullType()(), v::phone())),
			v::attribute('street1', v::stringType()->notEmpty()),
			v::attribute('street2', v::oneOf(v::nullType()(), v::stringType())),
			v::attribute('city', v::notEmpty()->alnum('-.')),
			v::attribute('stateProvince', v::alnum('-.')->notEmpty()),
			v::attribute('postalCode', v::stringType()->notEmpty()),
			v::attribute('country', v::alpha()->notEmpty()),
		];
	}
}