<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface FeatureVariant
{
	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @param string $name
	 */
	public function setName($name);

	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);
}