<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Country {

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
	public function getISO2();

	/**
	 * @param string $iso2
	 */
	public function setISO2($iso2);

	/**
	 * @return string
	 */
	public function getISO3();

	/**
	 * @param string $iso3
	 */
	public function setISO3($iso3);

	/**
	 * @return string
	 */
	public function getISONumeric();

	/**
	 * @param string $isoNumeric
	 */
	public function setISONumeric($isoNumeric);

	/**
	 * @return string
	 */
	public function getFIPSCode();

	/**
	 * @param string $fipsCode
	 */
	public function setFIPSCode($fipsCode);

	/**
	 * @return string
	 */
	public function getCapital();

	/**
	 * @param string $capital
	 */
	public function setCapital($capital);

	/**
	 * @return boolean
	 */
	public function getIsEU();

	/**
	 * @param boolean $isEU
	 */
	public function setIsEU($isEU);

	/**
	 * @return boolean
	 */
	public function getIsUK();

	/**
	 * @param boolean $isUK
	 */
	public function setIsUK($isUK);

	/**
	 * @return boolean
	 */
	public function getIsUSTerritory();

	/**
	 * @param boolean $isUSTerritory
	 */
	public function setIsUSTerritory($isUSTerritory);

	/**
	 * @return Continent
	 */
	public function getContinent();

	/**
	 * @param Continent $continent
	 */
	public function setContinent($continent);

}