<?php


namespace Fulfillment\Postage\Models\Request\Base;


abstract class BaseRateRequest implements \Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest
{
	/**
	 * @var string|int
	 */
	protected $referenceId;

	/**
	 * @return int|string
	 */
	public function getReferenceId()
	{
		return $this->referenceId;
	}

	/**
	 * @param int|string $referenceId
	 */
	public function setReferenceId($referenceId)
	{
		$this->referenceId = $referenceId;
	}

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
	 * @return BasePostageFeature[]
	 */
	public function getFeatures()
	{
		return $this->features;
	}

	/**
	 * @param BasePostageFeature[] $features
	 */
	public function setFeatures($features)
	{
		$this->features = $features;
	}

	/**
	 * @return float|int|string|null
	 */
	public function getCost()
	{
		return $this->cost;
	}

	/**
	 * @param float|int|string|null $cost
	 */
	public function setCost($cost)
	{
		$this->cost = $cost;
	}

	/**
	 * @return string|null
	 */
	public function getZone()
	{
		return $this->zone;
	}

	/**
	 * @param string|null $zone
	 */
	public function setZone($zone)
	{
		$this->zone = $zone;
	}

	/**
	 * @var string
	 */
	protected $shipper;

	/**
	 * @var string
	 */
	protected $service;

	/**
	 * @var BasePostageFeature[]
	 */
	protected $features;

	/**
	 * @var null|string|float|int
	 */
	protected $cost;

	/**
	 * @var null|string
	 */
	protected $zone;
}