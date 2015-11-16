<?php

namespace Fulfillment\Postage\Models\Request;


use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BaseShipment;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;
//use \Fulfillment\Postage\Models\Request\Contracts\ToAddress as ToAddressContract;

class Shipment extends BaseShipment implements Validatable
{
    use ValidatableBase;
    use SimpleSerializable;

    public function __construct($data = null)
    {
        $this->weightType     = ArrayUtil::get($data['weightType']);
        $this->weight         = ArrayUtil::get($data['weight']);
        $this->toAddress      = ArrayUtil::get($data['toAddress']);
        $this->packaging      = ArrayUtil::get($data['packaging']);
        $this->commodityItems = ArrayUtil::get($data['commodityItems']);
        $this->description    = ArrayUtil::get($data['description']);
    }

    public function getValidationRules()
    {

        return [
            v::attribute('weightType', v::notEmpty()->string()),
            v::attribute('weight', v::notEmpty()->numeric()),
            //v::callback([$this, 'getToAddress'], v::instance('\Fulfillment\Postage\Models\Request\Contracts\ToAddress')),
            //v::attribute('toAddress', v::instance('\Fulfillment\Postage\Models\Request\Contracts\ToAddress')),
            //v::callback([$this->getToAddress(), 'validate']),
            v::attribute('toAddress', v::instance('\Fulfillment\Postage\Models\Request\Contracts\ToAddress')->callback([$this->getToAddress(), 'validate'])),
            v::attribute('packaging', v::oneOf(v::nullValue(), v::instance('Fulfillment\Models\Postage\Request\Contracts\Packaging'))),
            //v::callback([$this, 'getCommodityItems'], v::arr())
            v::attribute('commodityItems', v::arr())
        ];

    }


}