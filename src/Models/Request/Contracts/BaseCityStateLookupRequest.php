<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

use Fulfillment\Postage\Models\Request\Base\BaseAddress;

interface BaseCityStateLookupRequest
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
	 * @return string
	 */
	public function getPostalCode();

	/**
	 * @param string $postalCode
	 */
	public function setPostalCode(string $postalCode);

    public function setUsing(string $service);

    /**
     * @return string
     */
    public function getUsing(): string;
}