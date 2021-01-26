<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

interface Postage extends \JsonSerializable {
	/**
	 * @return string
	 */
	public function getShipper();

	/**
	 * @param string $shipper
	 *
	 */
	public function setShipper($shipper);

	/**
	 * @return string
	 */
	public function getService();

	/**
	 * @param string $service
	 *
	 */
	public function setService($service);

	/**
	 * @return ReferenceFields
	 */
	public function getReferenceFields();

	/**
	 * @param $referenceFields
	 */
	public function setReferenceFields($referenceFields);

	/**
	 * @return Shipment
	 */
	public function getShipment();

	/**
	 * @param mixed $shipment
	 *
	 */
	public function setShipment($shipment);

	/**
	 * @param PostageFeature[] $features
	 *
	 * @return mixed
	 */
	public function setFeatures($features);

	/**
	 * @return PostageFeature[]
	 */
	public function getFeatures();

	/**
	 * @param PostageFeature $feature
	 *
	 */
	public function addFeature(PostageFeature $feature);

	/**
	 * @param PostageFeature $feature
	 *
	 */
	public function removeFeature(PostageFeature $feature);
}