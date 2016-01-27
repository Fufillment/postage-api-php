<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Date
{

    /**
     * @return string
     */
    public function getDate();

    /**
     * @param string $date
     */
    public function setDate($date);

    /**
     * @return int
     */
    public function getTimeZoneType();

    /**
     * @param int $timeZoneType
     */
    public function setTimeZoneType($timeZoneType);

    /**
     * @return string
     */
    public function getTimeZone();

    /**
     * @param string $timeZone
     */
    public function setTimeZone($timeZone);

}