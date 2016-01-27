<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Status as StatusContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Status implements StatusContract, \JsonSerializable {

    use SimpleSerializable;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var Date
     */
    protected $createdAt;

    /**
     * @var StatusType
     */
    protected $statusType;

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
     * @return Date
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param Date $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return StatusType
     */
    public function getStatusType()
    {
        return $this->statusType;
    }

    /**
     * @param StatusType $statusType
     */
    public function setStatusType($statusType)
    {
        $this->statusType = $statusType;
    }
}