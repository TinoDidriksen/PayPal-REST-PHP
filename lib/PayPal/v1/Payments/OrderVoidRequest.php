<?php

// This class was generated on Fri, 02 Feb 2018 14:21:16 CST by version 0.1.0-dev+dcaee0-dirty of PayPal SDK Generator
// OrderVoidRequest.php
// @version 0.1.0-dev+dcaee0-dirty
// @type request
// @data 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
// DO NOT EDIT

namespace PayPal\v1\Payments;

use PayPalHttp\HttpRequest;

class OrderVoidRequest extends HttpRequest
{
	function __construct($orderId)
	{
		parent::__construct("/v1/payments/orders/{order_id}/do-void?", "POST");

		$this->path = str_replace("{order_id}", urlencode($orderId), $this->path);
		$this->headers["Content-Type"] = "application/json";
	}


}
