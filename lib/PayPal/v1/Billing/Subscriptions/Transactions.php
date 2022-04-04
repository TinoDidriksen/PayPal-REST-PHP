<?php
namespace PayPal\v1\Billing\Subscriptions;
use PayPalHttp\HttpRequest;

class Transactions extends HttpRequest {
	function __construct($subId) {
		parent::__construct('/v1/billing/subscriptions/{sub_id}/transactions?', 'GET');
		$this->headers['Content-Type'] = 'application/json';

		$this->path = str_replace('{sub_id}', urlencode($subId), $this->path);
	}

	public function start_time($p) {
		$this->path .= "start_time=". urlencode($p) . "&";
	}

	public function end_time($p) {
		$this->path .= "end_time=". urlencode($p) . "&";
	}
}
