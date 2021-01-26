<?php


namespace Fulfillment\Postage\Models\Response;

class PostageFeature implements \Fulfillment\Postage\Models\Response\Contracts\PostageFeature
{
	/**
	 * @var int
	 */
	protected $id;
	/**
	 * @var Feature
	 */
	protected $feature;
	/**
	 * @var FeatureVariant
	 */
	protected $featureVariant;
	/**
	 * @var string
	 */
	protected $value;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return Feature
	 */
	public function getFeature()
	{
		return $this->feature;
	}

	/**
	 * @param Feature $feature
	 */
	public function setFeature($feature)
	{
		$this->feature = $feature;
	}

	/**
	 * @return FeatureVariant
	 */
	public function getFeatureVariant()
	{
		return $this->featureVariant;
	}

	/**
	 * @param FeatureVariant $featureVariant
	 */
	public function setFeatureVariant($featureVariant)
	{
		$this->featureVariant = $featureVariant;
	}

	/**
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param string $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}


}