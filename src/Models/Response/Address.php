<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Address as AddressContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Address implements AddressContract, \JsonSerializable {

	use SimpleSerializable;

	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $company;

	/**
	 * @var string
	 */
	protected $address1;

	/**
	 * @var string
	 */
	protected $address2;

	/**
	 * @var string
	 */
	protected $city;

	/**
	 * @var string
	 */
	protected $stateProvince;

	/**
	 * @var string
	 */
	protected $postalCode;

	/**
	 * @var string
	 */
	protected $phone;

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * @var Subdivision
	 */
	protected $subdivision;

	/**
	 * @var Country
	 */
	protected $country;


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
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getCompany()
	{
		return $this->company;
	}

	/**
	 * @param string $company
	 */
	public function setCompany($company)
	{
		$this->company = $company;
	}

	/**
	 * @return string
	 */
	public function getAddress1()
	{
		return $this->address1;
	}

	/**
	 * @param string $address1
	 */
	public function setAddress1($address1)
	{
		$this->address1 = $address1;
	}

	/**
	 * @return string
	 */
	public function getAddress2()
	{
		return $this->address2;
	}

	/**
	 * @param string $address2
	 */
	public function setAddress2($address2)
	{
		$this->address2 = $address2;
	}

	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * @param string $city
	 */
	public function setCity($city)
	{
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getStateProvince()
	{
		return $this->stateProvince;
	}

	/**
	 * @param string $stateProvince
	 */
	public function setStateProvince($stateProvince)
	{
		$this->stateProvince = $stateProvince;
	}

	/**
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}

	/**
	 * @param string $postalCode
	 */
	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;
	}

	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param string $phone
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @return Subdivision
	 */
	public function getSubdivision()
	{
		return $this->subdivision;
	}

	/**
	 * @param Subdivision $subdivision
	 */
	public function setSubdivision($subdivision)
	{
		$this->subdivision = $subdivision;
	}

	/**
	 * @return Country
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param Country $country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
	}

}