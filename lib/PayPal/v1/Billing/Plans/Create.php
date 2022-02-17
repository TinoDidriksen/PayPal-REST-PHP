<?php
namespace PayPal\v1\Billing\Plans;
use PayPalHttp\HttpRequest;

class Create extends HttpRequest {
	function __construct() {
		parent::__construct('/v1/billing/plans/?', 'POST');
		$this->headers['Content-Type'] = 'application/json';
	}
}
