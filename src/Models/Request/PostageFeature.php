<?php


namespace Fulfillment\Postage\Models;


use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Base\BasePostageFeature;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class PostageFeature extends BasePostageFeature implements Validatable
{
	use ValidatableBase;
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->featureId     = ArrayUtil::get($data['featureId']);
		$this->featureVariantId         = ArrayUtil::get($data['featureVariantId']);
		$this->value    = ArrayUtil::get($data['value']);
	}

	public function getValidationRules()
	{

		return [
			v::attribute('featureId', v::notEmpty()->numeric()),
			v::attribute('featureVariantId', v::numeric()),
			v::attribute('value',v::oneOf(v::nullType(), v::intType(), v::stringType())),
		];

	}
}