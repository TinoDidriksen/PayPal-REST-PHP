<?php
namespace PayPal\v1\Billing\Plans;
use PayPalHttp\HttpRequest;

class UpdatePricing extends HttpRequest {
	function __construct($planId) {
		parent::__construct('/v1/billing/plans/{plan_id}/update-pricing-schemes?', 'POST');
		$this->headers['Content-Type'] = 'application/json';

		$this->path = str_replace('{plan_id}', urlencode($planId), $this->path);
	}
}
