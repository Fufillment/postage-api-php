<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

use Fulfillment\Postage\Models\Request\Base\BaseAddress;

interface BaseAddressValidationRequest
{
	/**
	 * @return string
	 */
	public function getShipper();

	/**
	 * @param string $shipper
	 */
	public function setShipper($shipper);

	/**
	 * @return string
	 */
	public function getService();

	/**
	 * @param string $service
	 */
	public function setService($service);

	/**
	 * @return BaseAddress
	 */
	public function getAddress();

	/**
	 * @param BaseAddress $address
	 */
	public function setAddress($address);
}