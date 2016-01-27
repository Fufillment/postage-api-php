<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

interface Packaging extends \JsonSerializable
{
    /**
     * @return string
     */
    public function getDistanceType();

    /**
     * @param string $distanceType
     */
    public function setDistanceType($distanceType);

    /**
     * @return float
     */
    public function getLength();

    /**
     * @param float $length
     */
    public function setLength($length);

    /**
     * @return float
     */
    public function getWidth();

    /**
     * @param float $width
     */
    public function setWidth($width);

    /**
     * @return float
     */
    public function getHeight();

    /**
     * @param float $height
     */
    public function setHeight($height);
}