<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Subdivision {

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
	public function getLocalSymbol();

	/**
	 * @param string $localSymbol
	 */
	public function setLocalSymbol($localSymbol);

	/**
	 * @return SubdivisionType
	 */
	public function getSubdivisionType();

	/**
	 * @param SubdivisionType $subdivisionType
	 */
	public function setSubdivisionType($subdivisionType);

	/**
	 * @return Country
	 */
	public function getCountry();

	/**
	 * @param Country $country
	 */
	public function setCountry($country);

}