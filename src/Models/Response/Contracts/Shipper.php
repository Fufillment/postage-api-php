<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Shipper {

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
	 * @return Client
	 */
	public function getClient();

	/**
	 * @param Client $client
	 */
	public function setClient($client);

	/**
	 * @return Address
	 */
	public function getFromAddress();

	/**
	 * @param Address $fromAddress
	 */
	public function setFromAddress($fromAddress);

	/**
	 * @return Address
	 */
	public function getReturnAddress();

	/**
	 * @param Address $returnAddress
	 */
	public function setReturnAddress($returnAddress);

}