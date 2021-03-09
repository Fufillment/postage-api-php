<?php

namespace Fulfillment\Postage\Models\Request\Base;

use \Fulfillment\Postage\Models\Request\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Models\Request\Contracts\PostageFeature;

abstract class BasePostage implements PostageContract {

	/**
	 * @var string
	 */
	protected $shipper;

	/**
	 * @var string
	 */
	protected $service;

	/**
	 * @var BaseReferenceFields
	 */
	protected $referenceFields;

	/**
	 * @var BaseShipment
	 */
	protected $shipment;

	/**
	 * @var BasePostageFeature[]
	 */
	protected $features;


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
	 * @return BaseReferenceFields
	 */
	public function getReferenceFields()
	{
		return $this->referenceFields;
	}

	/**
	 * @param BaseReferenceFields $referenceFields
	 */
	public function setReferenceFields($referenceFields)
	{
		$this->referenceFields = $referenceFields;
	}

	/**
	 * @return BaseShipment
	 */
	public function getShipment()
	{
		return $this->shipment;
	}

	/**
	 * @param BaseShipment $shipment
	 */
	public function setShipment($shipment)
	{
		$this->shipment = $shipment;
	}

	public function setFeatures($features)
	{
		$this->features = $features;
	}

	public function getFeatures()
	{
		return $this->features;
	}

	public function addFeature(PostageFeature $feature)
	{
		$this->features[] = $feature;
	}

	public function removeFeature(PostageFeature $feature)
	{
		if (($key = array_search($feature, $this->features)) !== false)
		{
			unset($this->features[ $key ]);
		}
	}

	public function hasFeature($identifier)
	{
		return $this->getFeature($identifier) !== null;
	}

	public function getFeature($identifier)
	{
		foreach($this->features as $f) {
			if($f->getFeatureId() === $identifier)
			{
				return $f;
			}
		}
		return null;
	}

}