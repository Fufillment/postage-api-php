<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface Address
{

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