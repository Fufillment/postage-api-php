<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Postage {

	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return Date
	 */
	public function getShippedAt();

	/**
	 * @param mixed $shippedAt
	 */
	public function setShippedAt($shippedAt);

	/**
	 * @return Service
	 */
	public function getService();

	/**
	 * @param Service $service
	 */
	public function setService($service);

	/**
	 * @return TrackingNumber[]
	 */
	public function getTrackingNumbers();

	/**
	 * @param TrackingNumber[] $trackingNumbers
	 */
	public function setTrackingNumbers($trackingNumbers);

	/**
	 * @return Status
	 */
	public function getCurrentStatus();

	/**
	 * @param Status $currentStatus
	 */
	public function setCurrentStatus($currentStatus);

	/**
	 * @return Rate
	 */
	public function getRate();

	/**
	 * @param Rate $rate
	 */
	public function setRate($rate);

	/**
	 * @return Rate[]
	 */
	public function getMarkUpRates();

	/**
	 * @param Rate[] $markUpRates
	 */
	public function setMarkUpRates($markUpRates);

	/**
	 * @return Shipment
	 */
	public function getShipment();

	/**
	 * @param Shipment $shipment
	 */
	public function setShipment($shipment);

	/**
	 * @param User $createdBy
	 */
	public function setCreatedBy($createdBy);

	/**
	 * @param mixed $createdAt
	 */
	public function setCreatedAt($createdAt);

	/**
	 * @return PostageReferenceField[]
	 */
	public function getPostageReferenceFields();

	/**
	 * @param PostageReferenceField[] $postageReferenceFields
	 */
	public function setPostageReferenceFields($postageReferenceFields);

	/**
	 * @return PostageFeature[]
	 */
	public function getFeatures();

	/**
	 * @param PostageFeature[] $features
	 */
	public function setFeatures($features);

	/**
	 * @param Label $label
	 */
	public function setLabel($label);

	/**
	 * @return Label
	 */
	public function getLabel();

	/**
	 * @return User
	 */
	public function getCreatedBy();

	/**
	 * @return Date
	 */
	public function getCreatedAt();

}