<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Date as DateContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Date implements DateContract, \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var int
     */
    protected $timeZoneType;

    /**
     * @var string
     */
    protected $timeZone;


    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getTimeZoneType()
    {
        return $this->timeZoneType;
    }

    /**
     * @param int $timeZoneType
     */
    public function setTimeZoneType($timeZoneType)
    {
        $this->timeZoneType = $timeZoneType;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

}