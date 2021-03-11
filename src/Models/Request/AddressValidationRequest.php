<?php


namespace Fulfillment\Postage\Models\Request;


use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Base\BaseAddressValidationRequest;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class AddressValidationRequest extends BaseAddressValidationRequest implements Validatable, \JsonSerializable
{
	use ValidatableBase;
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->address = ArrayUtil::get($data['address']);
		$this->shipper = ArrayUtil::get($data['shipper']);
		$this->service = ArrayUtil::get($data['service']);
	}

	public function getValidationRules()
	{
		return [];
	}
}