<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface User
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
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return Client
     */
    public function getClient();

    /**
     * @param Client $client
     */
    public function setClient($client);

}