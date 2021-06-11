<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client;

use Randock\Graphql\Generator\Base\ApiClient as BaseApiClient;
use Randock\Vignette\Api\Client\Object\Enum\LogLevel;
use Randock\Vignette\Api\Client\Object\Input\CreateOrderInput;
use Randock\Vignette\Api\Client\Object\Input\ListOrdersInput;
use Randock\Vignette\Api\Client\Object\Input\LoginOrderInput;
use Randock\Vignette\Api\Client\Object\Input\TransitionOrderInput;
use Randock\Vignette\Api\Client\Object\Input\UpdateOrderInput;
use Randock\Vignette\Api\Client\Object\Input\VehicleLicensePlateInput;
use Randock\Vignette\Api\Client\Object\Model\CreateOrderResponse;
use Randock\Vignette\Api\Client\Object\Model\LoginOrderResponse;
use Randock\Vignette\Api\Client\Object\Model\OrderResponse;
use Randock\Vignette\Api\Client\Object\Model\OrdersResponse;
use Randock\Vignette\Api\Client\Object\Model\ProductResponse;
use Randock\Vignette\Api\Client\Object\Model\UpdateOrderResponse;

class ApiClient extends BaseApiClient
{
    /**
     * @param array $fields
     * @param string $id
     *
     * @return OrderResponse
     */
    public function order(array $fields, string $id): OrderResponse
    {
        $query = 'query order($id: ID!){
            order(id: $id) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['id' => $this->convertInput($id)]
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
     * @param string $orderUuid
     * @param LogLevel $logLevel
     * @param string $update
     *
     * @return string
     */
    public function fakeNews(array $fields, ?string $orderUuid = null, LogLevel $logLevel, string $update): string
    {
        $query = 'query fakeNews($orderUuid: String, $logLevel: LogLevel!, $update: String!){
            fakeNews(orderUuid: $orderUuid, logLevel: $logLevel, update: $update) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['orderUuid' => $this->convertInput($orderUuid), 'logLevel' => $this->convertInput($logLevel), 'update' => $this->convertInput($update)]
        );
        $data = $response->getData()['fakeNews'];

        return $data;
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

    /**
     * @param array $fields
     * @param TransitionOrderInput $input
     *
     * @return OrderResponse
     */
    public function transitionOrder(array $fields, TransitionOrderInput $input): OrderResponse
    {
        $query = 'mutation transitionOrder($input: TransitionOrderInput!){
            transitionOrder(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['transitionOrder'];

        return OrderResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param string $id
     *
     * @return OrderResponse
     */
    public function reopenOrder(array $fields, string $id): OrderResponse
    {
        $query = 'mutation reopenOrder($id: ID!){
            reopenOrder(id: $id) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['id' => $this->convertInput($id)]
        );
        $data = $response->getData()['reopenOrder'];

        return OrderResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param string $id
     *
     * @return OrderResponse
     */
    public function sendEmailInvoiceOrder(array $fields, string $id): OrderResponse
    {
        $query = 'mutation sendEmailInvoiceOrder($id: ID!){
            sendEmailInvoiceOrder(id: $id) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['id' => $this->convertInput($id)]
        );
        $data = $response->getData()['sendEmailInvoiceOrder'];

        return OrderResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param string $id
     *
     * @return OrderResponse
     */
    public function sendPartiallyProcessedEmail(array $fields, string $id): OrderResponse
    {
        $query = 'mutation sendPartiallyProcessedEmail($id: ID!){
            sendPartiallyProcessedEmail(id: $id) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['id' => $this->convertInput($id)]
        );
        $data = $response->getData()['sendPartiallyProcessedEmail'];

        return OrderResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param LoginOrderInput $input
     *
     * @return LoginOrderResponse
     */
    public function loginOrder(array $fields, LoginOrderInput $input): LoginOrderResponse
    {
        $query = 'mutation loginOrder($input: LoginOrderInput!){
            loginOrder(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['loginOrder'];

        return LoginOrderResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param UpdateOrderInput $input
     *
     * @return UpdateOrderResponse
     */
    public function updateOrder(array $fields, UpdateOrderInput $input): UpdateOrderResponse
    {
        $query = 'mutation updateOrder($input: UpdateOrderInput!){
            updateOrder(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['updateOrder'];

        return UpdateOrderResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param CreateOrderInput $input
     *
     * @return CreateOrderResponse
     */
    public function createOrder(array $fields, CreateOrderInput $input): CreateOrderResponse
    {
        $query = 'mutation createOrder($input: CreateOrderInput!){
            createOrder(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['createOrder'];

        return CreateOrderResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param VehicleLicensePlateInput $input
     *
     * @return bool
     */
    public function updateVehicleLicensePlateNumber(array $fields, VehicleLicensePlateInput $input): bool
    {
        $query = 'mutation updateVehicleLicensePlateNumber($input: VehicleLicensePlateInput!){
            updateVehicleLicensePlateNumber(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['updateVehicleLicensePlateNumber'];

        return $data;
    }
}
