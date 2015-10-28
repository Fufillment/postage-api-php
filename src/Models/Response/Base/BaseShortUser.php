<?php


namespace Fulfillment\Postage\Models\Response\Base;


use Fulfillment\Postage\Models\Response\Contracts\ShortUser;

abstract class BaseShortUser implements ShortUser
{
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