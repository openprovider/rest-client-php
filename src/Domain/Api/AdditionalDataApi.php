<?php
/**
 * AdditionalDataApi
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.2-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Domain\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Openprovider\Api\Rest\Client\Base\ApiException;
use Openprovider\Api\Rest\Client\Base\Configuration;
use Openprovider\Api\Rest\Client\Base\HeaderSelector;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;

/**
 * AdditionalDataApi Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalDataApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAdditionalData
     *
     * Get additional data
     *
     * @param  string $domain_name Domain name without extension. (optional)
     * @param  string $domain_extension Domain extension. (optional)
     * @param  string $operation The operation. (optional)
     *
     * @throws \Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Openprovider\Api\Rest\Client\Domain\Model\AdditionalDataGetAdditionalDataResponse|\Openprovider\Api\Rest\Client\Domain\Model\ErrorError
     */
    public function getAdditionalData($domain_name = null, $domain_extension = null, $operation = null)
    {
        list($response) = $this->getAdditionalDataWithHttpInfo($domain_name, $domain_extension, $operation);
        return $response;
    }

    /**
     * Operation getAdditionalDataWithHttpInfo
     *
     * Get additional data
     *
     * @param  string $domain_name Domain name without extension. (optional)
     * @param  string $domain_extension Domain extension. (optional)
     * @param  string $operation The operation. (optional)
     *
     * @throws Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Openprovider\Api\Rest\Client\Domain\Model\AdditionalDataGetAdditionalDataResponse|\Openprovider\Api\Rest\Client\Domain\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdditionalDataWithHttpInfo($domain_name = null, $domain_extension = null, $operation = null)
    {
        $request = $this->getAdditionalDataRequest($domain_name, $domain_extension, $operation);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Openprovider\Api\Rest\Client\Domain\Model\AdditionalDataGetAdditionalDataResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Domain\Model\AdditionalDataGetAdditionalDataResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Openprovider\Api\Rest\Client\Domain\Model\ErrorError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Domain\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Openprovider\Api\Rest\Client\Domain\Model\AdditionalDataGetAdditionalDataResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Domain\Model\AdditionalDataGetAdditionalDataResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Domain\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAdditionalDataAsync
     *
     * Get additional data
     *
     * @param  string $domain_name Domain name without extension. (optional)
     * @param  string $domain_extension Domain extension. (optional)
     * @param  string $operation The operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdditionalDataAsync($domain_name = null, $domain_extension = null, $operation = null)
    {
        return $this->getAdditionalDataAsyncWithHttpInfo($domain_name, $domain_extension, $operation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdditionalDataAsyncWithHttpInfo
     *
     * Get additional data
     *
     * @param  string $domain_name Domain name without extension. (optional)
     * @param  string $domain_extension Domain extension. (optional)
     * @param  string $operation The operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdditionalDataAsyncWithHttpInfo($domain_name = null, $domain_extension = null, $operation = null)
    {
        $returnType = '\Openprovider\Api\Rest\Client\Domain\Model\AdditionalDataGetAdditionalDataResponse';
        $request = $this->getAdditionalDataRequest($domain_name, $domain_extension, $operation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAdditionalData'
     *
     * @param  string $domain_name Domain name without extension. (optional)
     * @param  string $domain_extension Domain extension. (optional)
     * @param  string $operation The operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAdditionalDataRequest($domain_name = null, $domain_extension = null, $operation = null)
    {

        $resourcePath = '/v1beta/domains/additional-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($domain_name !== null) {
            $queryParams['domain.name'] = ObjectSerializer::toQueryValue($domain_name);
        }
        // query params
        if ($domain_extension !== null) {
            $queryParams['domain.extension'] = ObjectSerializer::toQueryValue($domain_extension);
        }
        // query params
        if ($operation !== null) {
            $queryParams['operation'] = ObjectSerializer::toQueryValue($operation);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
