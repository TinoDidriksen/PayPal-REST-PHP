<?php
namespace PayPal\v1\Catalogs\Products;
use PayPalHttp\HttpRequest;

class Create extends HttpRequest {
	function __construct() {
		parent::__construct('/v1/catalogs/products/?', 'POST');
		$this->headers['Content-Type'] = 'application/json';
	}
}
