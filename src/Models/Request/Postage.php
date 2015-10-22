<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 10/22/15
 * Time: 4:06 PM
 */

namespace Fulfillment\Postage\Models\Request;


use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BasePostage;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class Postage extends BasePostage implements Validatable
{
    use ValidatableBase;
    use SimpleSerializable;

    public function __construct($data = null)
    {
        $this->shipper            = ArrayUtil::get($data['shipper']);
        $this->service            = ArrayUtil::get($data['service']);
        $this->shipperReference   = ArrayUtil::get($data['shipperReference']);
        $this->consigneeReference = ArrayUtil::get($data['consigneeReference']);
        $this->reference1         = ArrayUtil::get($data['reference1']);
        $this->reference2         = ArrayUtil::get($data['reference2']);
        $this->reference3         = ArrayUtil::get($data['reference3']);
        $this->reference4         = ArrayUtil::get($data['reference4']);
        $this->reference5         = ArrayUtil::get($data['reference5']);
        $this->shipment           = ArrayUtil::get($data['shipment']);
    }

    /**
     * @return v[]
     */
    public function getValidationRules()
    {
        return [
            v::attribute('shipper', v::string()->notEmpty()),
            v::attribute('service', v::string()->notEmpty()),
            v::attribute('shipment', v::instance('Fulfillment\Postage\Models\Shipment')),
            v::attribute('shipment', v::callback([$this->shipment, 'validate']))
        ];
    }
}