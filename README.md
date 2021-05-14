The API works by obtaining a JWT and then sending it to the api. In order to speed things up, we need to store the JWT response by implementing the persistence strategy.

The easiest way is to use a PSR-16 compatible cache adapter. Most frameworks have these.

See https://github.com/eljam/guzzle-jwt-middleware#persistence

Minimum required code to use the API:

```php
<?php
use Softonic\GraphQL\Client;
use Softonic\GraphQL\ResponseBuilder;
use Randock\Vignette\Api\Client\ApiClient;
use Randock\Vignette\Api\Util\ClientBuilder;
use Randock\Vignette\Api\Client\Object\Enum\OrderStatus;
use Randock\Vignette\Api\Client\Object\Input\ListOrdersInput;

// This example uses "null" as persistence strategy. DO NOT DO THIS IN PROD.
$client = new Client(
    ClientBuilder::newClient(
        'ENDPOINT',
        'JWT_ENDPOINT',
        [
            'username' => 'XXX',
            'password' => 'XXX'
        ],
        null
    ),
    new ResponseBuilder()
);

// The API is strongly typed, so all responses are easy to use.
// You need to select all fields that you are going to use in the response.
// The API uses GRAPHQL underneath, so not selecting a field means it won't be available.
// See the docs for all possible fields.
$apiClient = new ApiClient($client);
$ordersResponse = $apiClient->orders(
    [
        'paging' => ['total'],
        'orders' => ['id', 'status']
    ],
    new ListOrdersInput(1, 10, null, null)
);

// The total number of orders can be found in the paging section.
echo sprintf(
    "Found %d orders\n\n",
    $ordersResponse->getPaging()->getTotal()
);

// Loop through the orders and print some data.
foreach ($ordersResponse->getOrders() as $order) {
    echo sprintf(
        "Status of order %s is %s. Order is completed: %d\n",
        $order->getId(),
        $order->getStatus(),
        $order->getStatus() === OrderStatus::COMPLETED
    );
}

// If you try to access a field that you didn't request, an exception is thrown.
// FieldNotSelectedException: The field orderId has not been selected in the query. Add it to the query if you need it.
echo $ordersResponse->getOrders()[0]->getOrderId();
```
