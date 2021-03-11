<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface Address {

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
	public function getCompany();

	/**
	 * @param string $company
	 */
	public function setCompany($company);

	/**
	 * @return string
	 */
	public function getAddress1();

	/**
	 * @param string $address1
	 */
	public function setAddress1($address1);

	/**
	 * @return string
	 */
	public function getAddress2();

	/**
	 * @param string $address2
	 */
	public function setAddress2($address2);

	/**
	 * @return string
	 */
	public function getCity();

	/**
	 * @param string $city
	 */
	public function setCity($city);

	/**
	 * @return string
	 */
	public function getStateProvince();

	/**
	 * @param string $stateProvince
	 */
	public function setStateProvince($stateProvince);

	/**
	 * @return string
	 */
	public function getPostalCode();

	/**
	 * @param string $postalCode
	 */
	public function setPostalCode($postalCode);

	/**
	 * @return string
	 */
	public function getPhone();

	/**
	 * @param string $phone
	 */
	public function setPhone($phone);

	/**
	 * @return string
	 */
	public function getEmail();

	/**
	 * @param string $email
	 */
	public function setEmail($email);

	/**
	 * @return Subdivision
	 */
	public function getSubdivision();

	/**
	 * @param Subdivision $subdivision
	 */
	public function setSubdivision($subdivision);

	/**
	 * @return Country
	 */
	public function getCountry();

	/**
	 * @param Country $country
	 */
	public function setCountry($country);

}