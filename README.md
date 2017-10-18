# PayPal REST SDK

This is a fork of the now deprecated https://github.com/paypal/PayPal-PHP-SDK/tree/dev-2.0-beta, with updates for newer APIs.

### Creating a Payment

```php
require 'vendor/autoload.php';

use PayPal\v1\Payments\PaymentCreateRequest;
use PayPal\Core\PayPalHttpClient;
use PayPal\Core\SandboxEnvironment;

$environment = new SandboxEnvironment('AdV4d6nLHabWLyemrw4BKdO9LjcnioNIOgoz7vD611ObbDUL0kJQfzrdhXEBwnH8QmV-7XZjvjRWn0kg', 'EPKoPC_haZMTq5uM9WXuzoxUVdgzVqHyD5avCyVC1NCIUJeVaNNUZMnzduYIqrdw-carG9LBAizFGMyK');
$client = new PayPalHttpClient($environment);

$body = [
	"intent" => "sale",
	"transactions" => [
		[
			"amount" => [
				"total" => "10",
				"currency" => "USD"
			]
		]
	],
	"redirect_urls" => [
		"cancel_url" => "http://paypal.com/cancel",
		"return_url" => "http://paypal.com/return"
	],
	"payer" => [
		"payment_method" => "paypal"
	]
];

$request = new PaymentCreateRequest();
$request->body = $body;

try {
	$response = $client->execute($request);
	print_r($response);
} catch (HttpException $ex) {
	echo $ex->statusCode;
	print_r($ex->getMessage());
}
```
