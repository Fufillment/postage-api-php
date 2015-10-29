<?php


namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Postage implements PostageContract, \JsonSerializable
{
    use SimpleSerializable;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $carrier
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * @param string $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    public function setTrackingNumbers($trackingNumbers)
    {
        $this->trackingNumbers = $trackingNumbers;
    }

    /**
     * @param Rate $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function setMarkUpRates($markUpRates)
    {
        $this->markUpRates = $markUpRates;
    }

    /**
     * @param ShortUser $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        if (is_array($createdAt)) {
            if (isset($createdAt['date'])) {
                $this->createdAt = new \DateTime($createdAt['date']);
            }
        } elseif (is_string($createdAt)) {
            $this->createdAt = new \DateTime($createdAt);
        } elseif ($createdAt instanceof \DateTime) {
            $this->createdAt = $createdAt;
        }
    }

    /**
     * @param mixed $postageReferenceFields
     */
    public function setPostageReferenceFields($postageReferenceFields)
    {
        $this->postageReferenceFields = $postageReferenceFields;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @return \Fulfillment\Postage\Models\Response\Contracts\TrackingNumber[]
     */
    public function getTrackingNumbers()
    {
        return $this->trackingNumbers;
    }

    /**
     * @return Rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return \Fulfillment\Postage\Models\Response\Contracts\Rate[]
     */
    public function getMarkUpRates()
    {
        return $this->markUpRates;
    }

    /**
     * @return ShortUser
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getPostageReferenceFields()
    {
        return $this->postageReferenceFields;
    }

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $carrier;

    /**
     * @var string
     */
    protected $service;

    /**
     * @var TrackingNumber[]
     */
    protected $trackingNumbers;

    /**
     * @var Rate
     */
    protected $rate;

    /**
     * @var Rate[]
     */
    protected $markUpRates;

    /**
     * @var ShortUser
     */
    protected $createdBy;

    /**
     * @var array|\DateTime
     */
    protected $createdAt;

    protected $postageReferenceFields;
}