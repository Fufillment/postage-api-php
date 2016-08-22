<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Status {

	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return Date
	 */
	public function getCreatedAt();

	/**
	 * @param Date $createdAt
	 */
	public function setCreatedAt($createdAt);

	/**
	 * @return StatusType
	 */
	public function getStatusType();

	/**
	 * @param StatusType $statusType
	 */
	public function setStatusType($statusType);
}