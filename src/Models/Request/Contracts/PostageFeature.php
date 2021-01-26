<?php


namespace Fulfillment\Postage\Models\Request\Contracts;


interface PostageFeature extends \JsonSerializable
{
	/**
	 * @return string|int
	 */
	public function getFeatureId();

	/**
	 * @param string|int $id
	 */
	public function setFeatureId($id);

	/**
	 * @return string|int
	 */
	public function getFeatureVariantId();

	/**
	 * @param string|int $id
	 */
	public function setFeatureVariantId($id);

	/**
	 * @return mixed
	 */
	public function getValue();

	/**
	 * @param mixed $value
	 */
	public function setValue($value);
}