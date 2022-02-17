<?php
namespace PayPal\v1\Billing\Subscriptions;
use PayPalHttp\HttpRequest;

class Revise extends HttpRequest {
	function __construct($subId) {
		parent::__construct('/v1/billing/subscriptions/{sub_id}/revise?', 'POST');
		$this->headers['Content-Type'] = 'application/json';

		$this->path = str_replace('{sub_id}', urlencode($subId), $this->path);
	}
}
