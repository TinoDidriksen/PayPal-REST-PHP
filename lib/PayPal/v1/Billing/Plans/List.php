<?php
namespace PayPal\v1\Billing\Plans;
use PayPalHttp\HttpRequest;

class List extends HttpRequest {
	function __construct() {
		parent::__construct('/v1/billing/plans/?', 'GET');
		$this->headers['Content-Type'] = 'application/json';
	}
}
