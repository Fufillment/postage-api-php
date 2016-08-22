<?php

namespace Fulfillment\Postage\Models\Traits;


trait SimpleSerializable {
	public function jsonSerialize()
	{
		return $this->simpleSerialize();
	}

	private function simpleSerialize()
	{
		return get_object_vars($this);
	}
}