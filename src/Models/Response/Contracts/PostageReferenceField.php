<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface PostageReferenceField
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
    public function getValue();

    /**
     * @param string $value
     */
    public function setValue($value);

    /**
     * @return ReferenceField
     */
    public function getReferenceField();

    /**
     * @param ReferenceField $referenceField
     */
    public function setReferenceField($referenceField);

    /**
     * @return IntegrationReferenceField
     */
    public function getIntegrationReferenceField();

    /**
     * @param IntegrationReferenceField $integrationReferenceField
     */
    public function setIntegrationReferenceField($integrationReferenceField);



}