<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface IntegrationReferenceField
{

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return boolean
     */
    public function getIsRequired();

    /**
     * @param boolean $isRequired
     */
    public function setIsRequired($isRequired);

    /**
     * @return Integration
     */
    public function getIntegration();

    /**
     * @param Integration $integration
     */
    public function setIntegration($integration);



}