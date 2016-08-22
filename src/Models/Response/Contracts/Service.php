<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Service {

	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @param string $name
	 */
	public function setName($name);

	/**
	 * @return string
	 */
	public function getSymbol();

	/**
	 * @param string $symbol
	 */
	public function setSymbol($symbol);

	/**
	 * @return string
	 */
	public function getDescription();

	/**
	 * @param string $description
	 */
	public function setDescription($description);

	/**
	 * @return boolean
	 */
	public function getRequiresCustoms();

	/**
	 * @param boolean $requiresCustoms
	 */
	public function setRequiresCustoms($requiresCustoms);

	/**
	 * @return Carrier
	 */
	public function getCarrier();

	/**
	 * @param Carrier $carrier
	 */
	public function setCarrier($carrier);

}