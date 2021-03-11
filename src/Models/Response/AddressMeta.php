<?php


namespace Fulfillment\Postage\Models\Response;
use \Fulfillment\Postage\Models\Response\Contracts\AddressMeta as AddressMetaContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class AddressMeta implements AddressMetaContract, \JsonSerializable
{
	use SimpleSerializable;

	/**
	 * @var string
	 */
	public $confidenceLevel;

	/**
	 * @var boolean
	 */
	public $apiExplicitValid;

	/**
	 * @var string
	 */
	public $apiExplicitValidReason;

	/**
	 * @var string
	 */
	public $tenantType;

	/**
	 * @var string
	 */
	public $addressMatchType;

	/**
	 * @var boolean
	 */
	public $peInferredValid;

	/**
	 * @var string
	 */
	public $peInferredValidReason;

	/**
	 * @var array
	 */
	public $rawAttributes;

	/**
	 * @var AddressMetaNormalizedAttributes[]
	 */
	public $normalizedAttributes;

	/**
	 * @return string
	 */
	public function getConfidenceLevel()
	{
		return $this->confidenceLevel;
	}

	/**
	 * @param string $confidenceLevel
	 */
	public function setConfidenceLevel($confidenceLevel)
	{
		$this->confidenceLevel = $confidenceLevel;
	}

	/**
	 * @return bool
	 */
	public function isApiExplicitValid()
	{
		return $this->apiExplicitValid;
	}

	/**
	 * @param bool $apiExplicitValid
	 */
	public function setApiExplicitValid($apiExplicitValid)
	{
		$this->apiExplicitValid = $apiExplicitValid;
	}

	/**
	 * @return string
	 */
	public function getApiExplicitValidReason()
	{
		return $this->apiExplicitValidReason;
	}

	/**
	 * @param string $apiExplicitValidReason
	 */
	public function setApiExplicitValidReason($apiExplicitValidReason)
	{
		$this->apiExplicitValidReason = $apiExplicitValidReason;
	}

	/**
	 * @return string
	 */
	public function getTenantType()
	{
		return $this->tenantType;
	}

	/**
	 * @param string $tenantType
	 */
	public function setTenantType($tenantType)
	{
		$this->tenantType = $tenantType;
	}

	/**
	 * @return string
	 */
	public function getAddressMatchType()
	{
		return $this->addressMatchType;
	}

	/**
	 * @param string $addressMatchType
	 */
	public function setAddressMatchType($addressMatchType)
	{
		$this->addressMatchType = $addressMatchType;
	}

	/**
	 * @return bool
	 */
	public function isPeInferredValid()
	{
		return $this->peInferredValid;
	}

	/**
	 * @param bool $peInferredValid
	 */
	public function setPeInferredValid($peInferredValid)
	{
		$this->peInferredValid = $peInferredValid;
	}

	/**
	 * @return string
	 */
	public function getPeInferredValidReason()
	{
		return $this->peInferredValidReason;
	}

	/**
	 * @param string $peInferredValidReason
	 */
	public function setPeInferredValidReason($peInferredValidReason)
	{
		$this->peInferredValidReason = $peInferredValidReason;
	}

	/**
	 * @return array
	 */
	public function getRawAttributes()
	{
		return $this->rawAttributes;
	}

	/**
	 * @param array $rawAttributes
	 */
	public function setRawAttributes($rawAttributes)
	{
		$this->rawAttributes = $rawAttributes;
	}

	/**
	 * @return AddressMetaNormalizedAttributes[]
	 */
	public function getNormalizedAttributes()
	{
		return $this->normalizedAttributes;
	}

	/**
	 * @param AddressMetaNormalizedAttributes[] $normalizedAttributes
	 */
	public function setNormalizedAttributes($normalizedAttributes)
	{
		$this->normalizedAttributes = $normalizedAttributes;
	}
}