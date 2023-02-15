<?php


namespace Fulfillment\Postage\Models\Request\Base;
use \Fulfillment\Postage\Models\Request\Contracts\BaseCityStateLookupRequest as ValidationContract;

abstract class BaseCityStateLookupRequest implements ValidationContract
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
	 * @var string
	 */
	protected $postalCode;

    /**
     * @var string
     */
    protected $using;

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
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}

	/**
	 * @param string $postalCode
	 */
	public function setPostalCode(string $postalCode)
	{
		$this->postalCode = $postalCode;
	}

    /**
     * @return string
     */
    public function getUsing(): string
    {
        return $this->using;
    }

    /**
     * @param string $service
     */
    public function setUsing(string $service): void
    {
        $this->using = $service;
    }
}