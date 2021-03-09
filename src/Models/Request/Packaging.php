<?php


namespace Fulfillment\Postage\Models\Request;


use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Base\BasePackaging;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class Packaging extends BasePackaging implements Validatable
{
	use ValidatableBase;
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->distanceType = ArrayUtil::get($data['distanceType']);
		$this->length       = ArrayUtil::get($data['length']);
		$this->width        = ArrayUtil::get($data['width']);
		$this->height       = ArrayUtil::get($data['height']);
		$this->packageType  = ArrayUtil::get($data['packageType']);
	}

	/**
	 * @return v[]
	 */
	public function getValidationRules()
	{
		// TODO upgrade respect so we can use v::anyOf
		return [
			v::attribute('distanceType', v::stringType()),
			v::attribute('length', v::oneOf(v::stringType(),v::numeric())),
			v::attribute('height', v::oneOf(v::stringType(),v::numeric())),
			v::attribute('width', v::oneOf(v::stringType(),v::numeric())),
			v::attribute('packageType', v::stringType())
		];
	}
}