<?php

// This class was generated on Fri, 02 Feb 2018 14:21:16 CST by version 0.1.0-dev+dcaee0-dirty of PayPal SDK Generator
// PaymentListRequest.php
// @version 0.1.0-dev+dcaee0-dirty
// @type request
// @data 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
// DO NOT EDIT

namespace PayPal\v1\Payments;

use PayPalHttp\HttpRequest;

class PaymentListRequest extends HttpRequest
{
	function __construct()
	{
		parent::__construct("/v1/payments/payment?", "GET");
		$this->headers["Content-Type"] = "application/json";
	}


	public function count($count)
	{
		$param = $count;
		$this->path .= "count=". urlencode($param) . "&";
	}
	public function endTime($endTime)
	{
		$param = $endTime;
		$this->path .= "end_time=". urlencode($param) . "&";
	}
	public function payeeId($payeeId)
	{
		$param = $payeeId;
		$this->path .= "payee_id=". urlencode($param) . "&";
	}
	public function sortBy($sortBy)
	{
		$param = $sortBy;
		$this->path .= "sort_by=". urlencode($param) . "&";
	}
	public function sortOrder($sortOrder)
	{
		$param = $sortOrder;
		$this->path .= "sort_order=". urlencode($param) . "&";
	}
	public function startId($startId)
	{
		$param = $startId;
		$this->path .= "start_id=". urlencode($param) . "&";
	}
	public function startIndex($startIndex)
	{
		$param = $startIndex;
		$this->path .= "start_index=". urlencode($param) . "&";
	}
	public function startTime($startTime)
	{
		$param = $startTime;
		$this->path .= "start_time=". urlencode($param) . "&";
	}
}
