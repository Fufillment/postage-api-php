<?php

namespace Fulfillment\Postage\Models\Request\Base;

use \Fulfillment\Postage\Models\Request\Contracts\Address as AddressContract;

abstract class BaseAddress implements AddressContract {

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
	protected $street1;

	/**
	 * @var string
	 */
	protected $street2;

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
	protected $country;

	/**
	 * @var string
	 */
	protected $phone;

	/**
	 * @var string
	 */
	protected $email;


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
	public function getStreet1()
	{
		return $this->street1;
	}

	/**
	 * @param string $street1
	 */
	public function setStreet1($street1)
	{
		$this->street1 = $street1;
	}

	/**
	 * @return string
	 */
	public function getStreet2()
	{
		return $this->street2;
	}

	/**
	 * @param string $street2
	 */
	public function setStreet2($street2)
	{
		$this->street2 = $street2;
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
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
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


}