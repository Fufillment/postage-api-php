<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface PostageFeature
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
	 * @return Feature
	 */
	public function getFeature();

	/**
	 * @param Feature $feature
	 */
	public function setFeature($feature);

	/**
	 * @return FeatureVariant
	 */
	public function getFeatureVariant();

	/**
	 * @param FeatureVariant $featureVariant
	 */
	public function setFeatureVariant($featureVariant);

	/**
	 * @return string
	 */
	public function getValue();

	/**
	 * @param string $value
	 */
	public function setValue($value);
}