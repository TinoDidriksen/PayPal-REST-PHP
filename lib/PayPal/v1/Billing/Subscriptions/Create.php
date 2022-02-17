<?php
namespace PayPal\v1\Billing\Subscriptions;
use PayPalHttp\HttpRequest;

class Create extends HttpRequest {
	function __construct() {
		parent::__construct('/v1/billing/subscriptions/?', 'POST');
		$this->headers['Content-Type'] = 'application/json';
	}
}
