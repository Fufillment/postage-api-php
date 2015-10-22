<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 10/22/15
 * Time: 3:32 PM
 */
namespace Fulfillment\Postage\Models\Request\Contracts;

interface Packaging extends \JsonSerializable
{
    /**
     * @return string
     */
    public function getDistanceType();

    /**
     * @param string $distanceType
     *
     * @return \Fulfillment\Postage\Models\Request\Base\Packaging
     */
    public function setDistanceType($distanceType);

    /**
     * @return float
     */
    public function getLength();

    /**
     * @param float $length
     *
     * @return \Fulfillment\Postage\Models\Request\Base\Packaging
     */
    public function setLength($length);

    /**
     * @return float
     */
    public function getWidth();

    /**
     * @param float $width
     *
     * @return \Fulfillment\Postage\Models\Request\Base\Packaging
     */
    public function setWidth($width);

    /**
     * @return float
     */
    public function getHeight();

    /**
     * @param float $height
     *
     * @return \Fulfillment\Postage\Models\Request\Base\Packaging
     */
    public function setHeight($height);
}