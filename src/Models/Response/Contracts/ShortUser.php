<?php
namespace Fulfillment\Postage\Models\Response\Contracts;

interface ShortUser
{
    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();
}