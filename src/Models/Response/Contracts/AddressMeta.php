<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface AddressMeta
{
	/**
	 * @return array
	 */
	public function getAttributes();

	/**
	 * @param array $attributes
	 */
	public function setAttributes($attributes);

	/**
	 * @return string
	 */
	public function getAddressType();

	/**
	 * @param string $addressType
	 */
	public function setAddressType($addressType);
}