<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class ValidatedAddressResult implements \JsonSerializable
{
	use SimpleSerializable;

	/**
	 * @var Address
	 */
	protected $address;

	/**
	 * @var AddressMeta
	 */
	protected $meta;

	/**
	 * @return AddressMeta
	 */
	public function getMeta()
	{
		return $this->meta;
	}

	/**
	 * @param AddressMeta $meta
	 */
	public function setMeta($meta)
	{
		$this->meta = $meta;
	}

	/**
	 * @return Address
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param Address $address
	 */
	public function setAddress($address)
	{
		$this->address = $address;
	}
}