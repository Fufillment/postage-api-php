<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Label;
use Fulfillment\Postage\Models\Response\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Postage implements PostageContract, \JsonSerializable {
	use SimpleSerializable;

	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var Date
	 */
	protected $shippedAt;

	/**
	 * @var Service
	 */
	protected $service;

	/**
	 * @var TrackingNumber[]
	 */
	protected $trackingNumbers;

	/**
	 * @var Status
	 */
	protected $currentStatus;

	/**
	 * @var Rate
	 */
	protected $rate;

	/**
	 * @var Rate[]
	 */
	protected $markUpRates;

	/**
	 * @var Shipment
	 */
	protected $shipment;

	/**
	 * @var User
	 */
	protected $createdBy;

	/**
	 * @var Date
	 */
	protected $createdAt;

	/**
	 * @var PostageReferenceField[]
	 */
	protected $postageReferenceFields;

	/**
	 * @var Label
	 */
	protected $label;


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return Date
	 */
	public function getShippedAt()
	{
		return $this->shippedAt;
	}

	/**
	 * @param mixed $shippedAt
	 */
	public function setShippedAt($shippedAt)
	{
		if(is_string($shippedAt)) {
			$this->shippedAt = new \DateTime($shippedAt);
		} else {
			$this->shipment = $shippedAt;
		}
	}

	/**
	 * @return Service
	 */
	public function getService()
	{
		return $this->service;
	}

	/**
	 * @param Service $service
	 */
	public function setService($service)
	{
		$this->service = $service;
	}

	/**
	 * @return TrackingNumber[]
	 */
	public function getTrackingNumbers()
	{
		return $this->trackingNumbers;
	}

	/**
	 * @param TrackingNumber[] $trackingNumbers
	 */
	public function setTrackingNumbers($trackingNumbers)
	{
		$this->trackingNumbers = $trackingNumbers;
	}

	/**
	 * @return Status
	 */
	public function getCurrentStatus()
	{
		return $this->currentStatus;
	}

	/**
	 * @param Status $currentStatus
	 */
	public function setCurrentStatus($currentStatus)
	{
		$this->currentStatus = $currentStatus;
	}

	/**
	 * @return Rate
	 */
	public function getRate()
	{
		return $this->rate;
	}

	/**
	 * @param Rate $rate
	 */
	public function setRate($rate)
	{
		$this->rate = $rate;
	}

	/**
	 * @return Rate[]
	 */
	public function getMarkUpRates()
	{
		return $this->markUpRates;
	}

	/**
	 * @param Rate[] $markUpRates
	 */
	public function setMarkUpRates($markUpRates)
	{
		$this->markUpRates = $markUpRates;
	}

	/**
	 * @return User
	 */
	public function getCreatedBy()
	{
		return $this->createdBy;
	}

	/**
	 * @param User $createdBy
	 */
	public function setCreatedBy($createdBy)
	{
		$this->createdBy = $createdBy;
	}

	/**
	 * @return Date
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * @param mixed $createdAt
	 */
	public function setCreatedAt($createdAt)
	{
		if(is_string($createdAt)) {
			$this->createdAt = new \DateTime($createdAt);
		} else {
			$this->createdAt = $createdAt;
		}
	}

	/**
	 * @return PostageReferenceField[]
	 */
	public function getPostageReferenceFields()
	{
		return $this->postageReferenceFields;
	}

	/**
	 * @param PostageReferenceField[] $postageReferenceFields
	 */
	public function setPostageReferenceFields($postageReferenceFields)
	{
		$this->postageReferenceFields = $postageReferenceFields;
	}

	/**
	 * @return Shipment
	 */
	public function getShipment()
	{
		return $this->shipment;
	}

	/**
	 * @param Shipment $shipment
	 */
	public function setShipment($shipment)
	{
		$this->shipment = $shipment;
	}


	/**
	 * @param Label $label
	 */
	public function setLabel($label)
	{
		$this->label = $label;
	}

	/**
	 * @return Label
	 */
	public function getLabel()
	{
		return $this->label;
	}
}