<?php


namespace Fulfillment\Postage\Models\Response\Contracts;


interface ZonePostalCode {
	/**
	 * @return int
	 */
	public function getZone();

	/**
	 * @return string
	 */
	public function getPostalCode();
}