<?php


namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\ShortUser as ShortUserContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class ShortUser implements ShortUserContract, \JsonSerializable
{
    use SimpleSerializable;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

}