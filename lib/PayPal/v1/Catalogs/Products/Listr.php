<?php
namespace PayPal\v1\Catalogs\Products;
use PayPalHttp\HttpRequest;

class Listr extends HttpRequest {
	function __construct() {
		parent::__construct('/v1/catalogs/products/?', 'GET');
		$this->headers['Content-Type'] = 'application/json';
	}
}
