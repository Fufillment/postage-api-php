<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

interface Address extends \JsonSerializable
{
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
    public function getStreet1();

    /**
     * @param string $street1
     */
    public function setStreet1($street1);

    /**
     * @return string
     */
    public function getStreet2();

    /**
     * @param string $street2
     */
    public function setStreet2($street2);

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
    public function getCountry();

    /**
     * @param string $country
     */
    public function setCountry($country);

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
}