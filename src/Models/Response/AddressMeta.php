<?php


namespace Fulfillment\Postage\Models\Response;
use \Fulfillment\Postage\Models\Response\Contracts\AddressMeta as AddressMetaContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class AddressMeta implements AddressMetaContract, \JsonSerializable
{
	use SimpleSerializable;

	/**
	 * @var string
	 */
	protected $addressType;

	/**
	 * @var array
	 */
	protected $attributes;

	/**
	 * @return array
	 */
	public function getAttributes()
	{
		return $this->attributes;
	}

	/**
	 * @param array $attributes
	 */
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
	}

	/**
	 * @return string
	 */
	public function getAddressType()
	{
		return $this->addressType;
	}

	/**
	 * @param string $addressType
	 */
	public function setAddressType($addressType)
	{
		$this->addressType = $addressType;
	}
}