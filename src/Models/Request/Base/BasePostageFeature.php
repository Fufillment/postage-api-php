<?php


namespace Fulfillment\Postage\Models\Request\Base;


use Fulfillment\Postage\Models\Request\Contracts\PostageFeature;

abstract class BasePostageFeature implements PostageFeature
{
	/**
	 * @var int
	 */
	protected $featureId;
	/**
	 * @var int
	 */
	protected $featureVariantId;
	/**
	 * @var mixed
	 */
	protected $value;

	public function getFeatureId()
	{
		return $this->featureId;
	}

	public function setFeatureId($id)
	{
		$this->featureId = $id;
	}

	public function getFeatureVariantId()
	{
		return $this->featureVariantId;
	}

	public function setFeatureVariantId($id)
	{
		$this->featureVariantId = $id;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}
}