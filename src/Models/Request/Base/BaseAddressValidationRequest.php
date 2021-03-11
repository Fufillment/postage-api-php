<?php


namespace Fulfillment\Postage\Models\Request\Base;
use \Fulfillment\Postage\Models\Request\Contracts\BaseAddressValidationRequest as ValidationContract;

abstract class BaseAddressValidationRequest implements ValidationContract
{
	/**
	 * @var string
	 */
	protected $shipper;

	/**
	 * @var string
	 */
	protected $service;

	/**
	 * @var BaseAddress
	 */
	protected $address;

	/**
	 * @return string
	 */
	public function getShipper()
	{
		return $this->shipper;
	}

	/**
	 * @param string $shipper
	 */
	public function setShipper($shipper)
	{
		$this->shipper = $shipper;
	}

	/**
	 * @return string
	 */
	public function getService()
	{
		return $this->service;
	}

	/**
	 * @param string $service
	 */
	public function setService($service)
	{
		$this->service = $service;
	}

	/**
	 * @return BaseAddress
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param BaseAddress $address
	 */
	public function setAddress($address)
	{
		$this->address = $address;
	}
}