<?php
namespace PayPal\v1\Billing\Subscriptions;
use PayPalHttp\HttpRequest;

class Get extends HttpRequest {
	function __construct($subId) {
		parent::__construct('/v1/billing/subscriptions/{sub_id}?', 'GET');
		$this->headers['Content-Type'] = 'application/json';

		$this->path = str_replace('{sub_id}', urlencode($subId), $this->path);
	}
}
