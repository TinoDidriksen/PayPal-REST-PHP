<?php
namespace PayPal\v1\Billing\Subscriptions;
use PayPalHttp\HttpRequest;

class Cancel extends HttpRequest {
	function __construct($subId) {
		parent::__construct('/v1/billing/subscriptions/{sub_id}/cancel?', 'POST');
		$this->headers['Content-Type'] = 'application/json';

		$this->path = str_replace('{sub_id}', urlencode($subId), $this->path);
	}
}
