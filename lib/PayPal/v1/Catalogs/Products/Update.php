<?php
namespace PayPal\v1\Catalogs\Products;
use PayPalHttp\HttpRequest;

class Update extends HttpRequest {
	function __construct($productId) {
		parent::__construct('/v1/catalogs/products/{product_id}?', 'PATCH');
		$this->headers['Content-Type'] = 'application/json';

		$this->path = str_replace('{product_id}', urlencode($productId), $this->path);
	}
}
