<?php
namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Service as ServiceContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Service implements ServiceContract, \JsonSerializable
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
     * @var string
     */
    protected $description;

    /**
     * @var boolean
     */
    protected $requiresCustoms;

    /**
     * @var Carrier
     */
    protected $carrier;



    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSymbol() {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol) {
        $this->symbol = $symbol;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return boolean
     */
    public function getRequiresCustoms()
    {
        return $this->requiresCustoms;
    }

    /**
     * @param boolean $requiresCustoms
     */
    public function setRequiresCustoms($requiresCustoms)
    {
        $this->requiresCustoms = $requiresCustoms;
    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param Carrier $carrier
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

}