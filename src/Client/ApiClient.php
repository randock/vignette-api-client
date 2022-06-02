<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client;

use Randock\Graphql\Generator\Base\ApiClient as BaseApiClient;
use Randock\Vignette\Api\Client\Object\Input\AcceptClaimInput;
use Randock\Vignette\Api\Client\Object\Input\ConfirmOrderDocumentInput;
use Randock\Vignette\Api\Client\Object\Input\CreateOrderCommentInput;
use Randock\Vignette\Api\Client\Object\Input\CreateOrderInput;
use Randock\Vignette\Api\Client\Object\Input\ListDocumentConfirmationOrdersInput;
use Randock\Vignette\Api\Client\Object\Input\ListOrdersInput;
use Randock\Vignette\Api\Client\Object\Input\ListPendingManualOrdersInput;
use Randock\Vignette\Api\Client\Object\Input\ListPendingOrdersInput;
use Randock\Vignette\Api\Client\Object\Input\LoginOrderInput;
use Randock\Vignette\Api\Client\Object\Input\OrderVariantAlternativeEmailInput;
use Randock\Vignette\Api\Client\Object\Input\OrderVariantStartDateInput;
use Randock\Vignette\Api\Client\Object\Input\RejectOrderDocumentInput;
use Randock\Vignette\Api\Client\Object\Input\RouteInput;
use Randock\Vignette\Api\Client\Object\Input\TransitionOrderInput;
use Randock\Vignette\Api\Client\Object\Input\UpdateOrderInput;
use Randock\Vignette\Api\Client\Object\Input\VehicleLicensePlateInput;
use Randock\Vignette\Api\Client\Object\Model\CreateOrderResponse;
use Randock\Vignette\Api\Client\Object\Model\CreditcardBalanceResponse;
use Randock\Vignette\Api\Client\Object\Model\DisputeEvidenceResponse;
use Randock\Vignette\Api\Client\Object\Model\DisputeResponse;
use Randock\Vignette\Api\Client\Object\Model\DisputeSummaryResponse;
use Randock\Vignette\Api\Client\Object\Model\LoginOrderResponse;
use Randock\Vignette\Api\Client\Object\Model\OrderCommentResponse;
use Randock\Vignette\Api\Client\Object\Model\OrderDocumentResponse;
use Randock\Vignette\Api\Client\Object\Model\OrderProductVariantMailResponse;
use Randock\Vignette\Api\Client\Object\Model\OrderProductVariantResponse;
use Randock\Vignette\Api\Client\Object\Model\OrderResponse;
use Randock\Vignette\Api\Client\Object\Model\OrdersResponse;
use Randock\Vignette\Api\Client\Object\Model\ProductResponse;
use Randock\Vignette\Api\Client\Object\Model\RouteResponse;
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
     * @param string $id
     *
     * @return OrderProductVariantMailResponse
     */
    public function orderProductVariantMail(array $fields, string $id): OrderProductVariantMailResponse
    {
        $query = 'query orderProductVariantMail($id: ID!){
            orderProductVariantMail(id: $id) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['id' => $this->convertInput($id)]
        );
        $data = $response->getData()['orderProductVariantMail'];

        return OrderProductVariantMailResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param RouteInput $input
     *
     * @return RouteResponse
     */
    public function resolveRoute(array $fields, RouteInput $input): RouteResponse
    {
        $query = 'query resolveRoute($input: RouteInput!){
            resolveRoute(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['resolveRoute'];

        return RouteResponse::fromArray($data);
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
}
