<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Country as CountryContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Country implements CountryContract, \JsonSerializable
{

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
    protected $iso2;

    /**
     * @var string
     */
    protected $iso3;

    /**
     * @var string
     */
    protected $isoNumeric;

    /**
     * @var string
     */
    protected $fipsCode;

    /**
     * @var string
     */
    protected $capital;

    /**
     * @var boolean
     */
    protected $isEU;

    /**
     * @var boolean
     */
    protected $isUK;

    /**
     * @var boolean
     */
    protected $isUSTerritory;

    /**
     * @var Continent
     */
    protected $continent;


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
    public function getISO2()
    {
        return $this->iso2;
    }

    /**
     * @param string $iso2
     */
    public function setISO2($iso2)
    {
        $this->iso2 = $iso2;
    }

    /**
     * @return string
     */
    public function getISO3()
    {
        return $this->iso3;
    }

    /**
     * @param string $iso3
     */
    public function setISO3($iso3)
    {
        $this->iso3 = $iso3;
    }

    /**
     * @return string
     */
    public function getISONumeric()
    {
        return $this->isoNumeric;
    }

    /**
     * @param string $isoNumeric
     */
    public function setISONumeric($isoNumeric)
    {
        $this->isoNumeric = $isoNumeric;
    }

    /**
     * @return string
     */
    public function getFIPSCode()
    {
        return $this->fipsCode;
    }

    /**
     * @param string $fipsCode
     */
    public function setFIPSCode($fipsCode)
    {
        $this->fipsCode = $fipsCode;
    }

    /**
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @param string $capital
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    /**
     * @return boolean
     */
    public function getIsEU()
    {
        return $this->isEU;
    }

    /**
     * @param boolean $isEU
     */
    public function setIsEU($isEU)
    {
        $this->isEU = $isEU;
    }

    /**
     * @return boolean
     */
    public function getIsUK()
    {
        return $this->isUK;
    }

    /**
     * @param boolean $isUK
     */
    public function setIsUK($isUK)
    {
        $this->isUK = $isUK;
    }

    /**
     * @return boolean
     */
    public function getIsUSTerritory()
    {
        return $this->isUSTerritory;
    }

    /**
     * @param boolean $isUSTerritory
     */
    public function setIsUSTerritory($isUSTerritory)
    {
        $this->isUSTerritory = $isUSTerritory;
    }

    /**
     * @return Continent
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * @param Continent $continent
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
    }

}