<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\PostageReferenceField as PostageReferenceFieldContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class PostageReferenceField implements PostageReferenceFieldContract, \JsonSerializable
{

    use SimpleSerializable;



    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var ReferenceField
     */
    protected $referenceField;

    /**
     * @var IntegrationReferenceField
     */
    protected $integrationReferenceField;


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
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return ReferenceField
     */
    public function getReferenceField()
    {
        return $this->referenceField;
    }

    /**
     * @param ReferenceField $referenceField
     */
    public function setReferenceField($referenceField)
    {
        $this->referenceField = $referenceField;
    }

    /**
     * @return IntegrationReferenceField
     */
    public function getIntegrationReferenceField()
    {
        return $this->integrationReferenceField;
    }

    /**
     * @param IntegrationReferenceField $integrationReferenceField
     */
    public function setIntegrationReferenceField($integrationReferenceField)
    {
        $this->integrationReferenceField = $integrationReferenceField;
    }

}