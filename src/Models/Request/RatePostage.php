<?php


namespace Fulfillment\Postage\Models\Request;


use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Base\BaseRatePostage;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator;
use Respect\Validation\Validator as v;

class RatePostage extends BaseRatePostage implements Validatable {
	use ValidatableBase;
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->postage         = ArrayUtil::get($data['postage']);
		$this->rateRequests         = ArrayUtil::get($data['rateRequests']);
	}

	public function getValidationRules()
	{
		return [
			v::attribute('postage', v::instance(\Fulfillment\Postage\Models\Request\Contracts\Postage::class)),
			v::attribute('rateRequests', v::arrayVal())
		];
	}
}