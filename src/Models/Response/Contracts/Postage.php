<?php
namespace Fulfillment\Postage\Models\Response\Contracts;

use DateTime;

interface Postage
{
    /**
     * @param $id int
     *
     * @return mixed
     */
    public function setId($id);

    /**
     * @param $carrier string
     */
    public function setCarrier($carrier);

    /**
     * @param $service string
     */
    public function setService($service);

    /**
     * @param $trackingNumbers
     */
    public function setTrackingNumbers($trackingNumbers);

    /**
     * @param $rate
     */
    public function setRate($rate);

    /**
     * @param $markUpRates
     */
    public function setMarkUpRates($markUpRates);

    /**
     * @param $createdBy
     */
    public function setCreatedBy($createdBy);

    /**
     * @param $createdAt
     */
    public function setCreatedAt($createdAt);

    /**
     * @param $postageReferenceFields
     */
    public function setPostageReferenceFields($postageReferenceFields);

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getCarrier();

    /**
     * @return string
     */
    public function getService();

    /**
     * @return \Fulfillment\Postage\Models\Response\Contracts\TrackingNumber[]
     */
    public function getTrackingNumbers();

    /**
     * @return Rate
     */
    public function getRate();

    /**
     * @return \Fulfillment\Postage\Models\Response\Contracts\Rate[]
     */
    public function getMarkUpRates();

    /**
     * @return ShortUser
     */
    public function getCreatedBy();

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return mixed
     */
    public function getPostageReferenceFields();
}