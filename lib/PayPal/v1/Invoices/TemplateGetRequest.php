<?php

// This class was generated on Tue, 30 Jan 2018 16:20:28 CST by version 0.1.0-dev+dcaee0-dirty of PayPal SDK Generator
// TemplateGetRequest.php
// @version 0.1.0-dev+dcaee0-dirty
// @type request
// @data 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
// DO NOT EDIT

namespace PayPal\v1\Invoices;

use PayPalHttp\HttpRequest;

class TemplateGetRequest extends HttpRequest
{
	function __construct($templateId)
	{
		parent::__construct("/v1/invoicing/templates/{template_id}?", "GET");

		$this->path = str_replace("{template_id}", urlencode($templateId), $this->path);
		$this->headers["Content-Type"] = "application/json";
	}


}
