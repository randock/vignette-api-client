<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client;

use Randock\Graphql\Generator\Base\ApiClient as BaseApiClient;
use Randock\Vignette\Api\Client\Object\Input\CreateOrderInput;
use Randock\Vignette\Api\Client\Object\Input\ListOrdersInput;
use Randock\Vignette\Api\Client\Object\Model\OrderResponse;
use Randock\Vignette\Api\Client\Object\Model\OrdersResponse;
use Randock\Vignette\Api\Client\Object\Model\ProductResponse;

class ApiClient extends BaseApiClient
{
    /**
     * @param array $fields
     * @param CreateOrderInput $input
     *
     * @return OrderResponse
     */
    public function order(array $fields, CreateOrderInput $input): OrderResponse
    {
        $query = 'mutation order($input: CreateOrderInput!){
            order(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['order'];

        return OrderResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param ListOrdersInput $input
     *
     * @return OrdersResponse
     */
    public function orders(array $fields, ListOrdersInput $input): OrdersResponse
    {
        $query = 'query orders($input: ListOrdersInput!){
            orders(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['orders'];

        return OrdersResponse::fromArray($data);
    }

    /**
     * @param array $fields
     *
     * @return ProductResponse[]
     */
    public function products(array $fields): array
    {
        $query = 'query products{
            products {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            []
        );
        $data = $response->getData()['products'];

        return array_map(function(array $item) {
            return ProductResponse::fromArray($item);
        }, $data);
    }
}
