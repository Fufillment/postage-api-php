<?php
namespace Fulfillment\Postage\Models\Response\Contracts;

use DateTime;

interface Postage
{
    public function setId($id);

    public function setCarrier($carrier);

    public function setService($service);

    public function setTrackingNumbers($trackingNumbers);

    public function setRate($rate);

    public function setMarkUpRates($markUpRates);

    public function setCreatedBy($createdBy);

    public function setCreatedAt($createdAt);

    public function setPostageReferenceFields($postageReferenceFields);

    public function getId();

    public function getCarrier();

    public function getService();

    public function getTrackingNumbers();

    public function getRate();

    public function getMarkUpRates();

    public function getCreatedBy();

    public function getCreatedAt();

    public function getPostageReferenceFields();
}