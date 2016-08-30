<?php

namespace H\Sandbox\Collection;

use H\Sandbox\Product;

class Collection {
	private $data;

	public function __construct() {
		$this->clear();
	}

	public function clear() {
		$this->data = array();
	}

	public function set(Product $product) {
		$this->data[] = $product;
	}

	public function get($index) {
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}

	public function __toString() {
		return json_encode(
			array_map(function($product) {
				return json_decode($product);
			}, $this->data)
		);
	}
}