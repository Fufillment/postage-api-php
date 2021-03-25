<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

use Fulfillment\Postage\Models\Response\AddressMetaNormalizedAttributes;

interface AddressMeta
{
	/**
	 * @return string
	 */
	public function getConfidenceLevel();

	/**
	 * @param string $confidenceLevel
	 */
	public function setConfidenceLevel($confidenceLevel);

	/**
	 * @return bool
	 */
	public function isApiExplicitValid();

	/**
	 * @param bool $apiExplicitValid
	 */
	public function setApiExplicitValid($apiExplicitValid);

	/**
	 * @return string
	 */
	public function getApiExplicitValidReason();

	/**
	 * @param string $apiExplicitValidReason
	 */
	public function setApiExplicitValidReason($apiExplicitValidReason);

	/**
	 * @return string
	 */
	public function getTenantType();

	/**
	 * @param string $tenantType
	 */
	public function setTenantType($tenantType);

	/**
	 * @return string
	 */
	public function getAddressMatchType();

	/**
	 * @param string $addressMatchType
	 */
	public function setAddressMatchType($addressMatchType);

	/**
	 * @return bool
	 */
	public function isPeInferredValid();

	/**
	 * @param bool $peInferredValid
	 */
	public function setPeInferredValid($peInferredValid);

	/**
	 * @return string
	 */
	public function getPeInferredValidReason();

	/**
	 * @param string $peInferredValidReason
	 */
	public function setPeInferredValidReason($peInferredValidReason);

	/**
	 * @return string[]
	 */
	public function getPeValidationErrors();

	/**
	 * @param string[] $peValidationErrors
	 */
	public function setPeValidationErrors($peValidationErrors);

	/**
	 * @return array
	 */
	public function getRawAttributes();

	/**
	 * @param array $rawAttributes
	 */
	public function setRawAttributes($rawAttributes);

	/**
	 * @return AddressMetaNormalizedAttributes[]
	 */
	public function getNormalizedAttributes();

	/**
	 * @param AddressMetaNormalizedAttributes[] $normalizedAttributes
	 */
	public function setNormalizedAttributes($normalizedAttributes);
}