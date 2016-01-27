<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Shipper as ShipperContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Shipper implements ShipperContract, \JsonSerializable
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
    protected $symbol;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Address
     */
    protected $fromAddress;

    /**
     * @var Address
     */
    protected $returnAddress;


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
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return Address
     */
    public function getFromAddress()
    {
        return $this->fromAddress;
    }

    /**
     * @param Address $fromAddress
     */
    public function setFromAddress($fromAddress)
    {
        $this->fromAddress = $fromAddress;
    }

    /**
     * @return Address
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }

    /**
     * @param Address $returnAddress
     */
    public function setReturnAddress($returnAddress)
    {
        $this->returnAddress = $returnAddress;
    }

}