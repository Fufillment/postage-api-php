<?php


namespace Fulfillment\Postage\Models\Request;


use Fulfillment\Postage\Models\Request\Base\BaseRateRequest;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use FoxxMD\Utilities\ArrayUtil;

class RateRequest extends BaseRateRequest
{
	use SimpleSerializable;

	public function __construct($data = null)
	{
		$this->referenceId = ArrayUtil::get($data['referenceId']);
		$this->shipper     = ArrayUtil::get($data['shipper']);
		$this->service     = ArrayUtil::get($data['service']);
		$this->cost        = ArrayUtil::get($data['cost']);
		$this->zone        = ArrayUtil::get($data['zone']);
		$this->features    = ArrayUtil::get($data['features']);
	}
}