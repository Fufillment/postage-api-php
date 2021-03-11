<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Address as AddressContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Address implements AddressContract, \JsonSerializable {

	use SimpleSerializable;

	/**
	 * @var int
	 */
	public $id;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var string
	 */
	public $company;

	/**
	 * @var string
	 */
	public $address1;

	/**
	 * @var string
	 */
	public $address2;

	/**
	 * @var string
	 */
	public $addressLocality;

	/**
	 * @var string
	 */
	public $addressRegion;

	/**
	 * @var string
	 */
	public $postalCode;

	/**
	 * @var string
	 */
	public $phone;

	/**
	 * @var string
	 */
	public $email;

	/**
	 * @var Subdivision
	 */
	public $subdivision;

	/**
	 * @var Country
	 */
	public $iso;


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
	public function getAddressLocality()
	{
		return $this->addressLocality;
	}

	/**
	 * @param string $addressLocality
	 */
	public function setAddressLocality($addressLocality)
	{
		$this->addressLocality = $addressLocality;
	}

	/**
	 * @return string
	 */
	public function getAddressRegion()
	{
		return $this->addressRegion;
	}

	/**
	 * @param string $addressRegion
	 */
	public function setAddressRegion($addressRegion)
	{
		$this->addressRegion = $addressRegion;
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
	public function getIso()
	{
		return $this->iso;
	}

	/**
	 * @param Country $iso
	 */
	public function setIso($iso)
	{
		$this->iso = $iso;
	}

}