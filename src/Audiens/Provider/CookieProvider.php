<?php

namespace Audiens\AdForm\Provider;

use Audiens\AdForm\Entity\CookieRequest;
use Audiens\AdForm\Entity\CookieResponse;
use Audiens\AdForm\Entity\CookieResponseHydrator;
use Audiens\AdForm\HttpClient;
use Audiens\AdForm\Exception;
use Audiens\AdForm\Cache\CacheInterface;
use GuzzleHttp\Exception\ClientException;

/**
 * Class CookieProvider
 *
 * @package Adform
 */
class CookieProvider
{
    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @var CacheInterface
     */
    protected $cache;

    /**
     * @var string
     */
    protected $cachePrefix = 'cookie';

    /**
     * @param HttpClient          $httpClient
     * @param CacheInterface|null $cache
     */
    public function __construct(HttpClient $httpClient, CacheInterface $cache = null)
    {
        $this->httpClient = $httpClient;

        $this->cache = $cache;
    }

    /**
     * Request cookies for the set of segments.
     *
     * @param CookieRequest $cookieRequest
     *
     * @return mixed
     * @throws Exception\ApiException
     * @throws Exception\EntityInvalidException
     */
    public function export(CookieRequest $cookieRequest)
    {
        // Endpoint URI
        $uri = 'v1/cookies/export';

        $options = [
            'json' => $cookieRequest,
        ];

        try {
            $data = $this->httpClient->post($uri, $options)->getBody()->getContents();

            $cookieResponse = CookieResponseHydrator::fromStdClass(json_decode($data));

            return $cookieResponse;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $responseBody = $response->getBody()->getContents();
            $responseCode = $response->getStatusCode();

            $error = json_decode($responseBody);

            if (property_exists($error, 'modelState')) { // validation error
                throw Exception\EntityInvalidException::invalid($responseBody, $responseCode, $error->modelState);
            } else { // general error
                throw Exception\ApiException::translate($responseBody, $responseCode);
            }
        }
    }


    /**
     * Upload cookies in csv format into specified Data provider. Cookies are passed in request body in csv format.
     *
     * @param int    $dataProviderId
     * @param string $data
     *
     * @return CookieResponse
     * @throws Exception\ApiException
     * @throws Exception\EntityInvalidException
     */
    public function upload($dataProviderId, $data)
    {
        // Endpoint URI
        $uri = sprintf('v1/dataproviders/%d/cookies', $dataProviderId);

        $options = [
            'body' => $data,
        ];

        try {
            $data = $this->httpClient->post($uri, $options)->getBody()->getContents();

            $cookieResponse = CookieResponseHydrator::fromStdClass(json_decode($data));

            return $cookieResponse;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $responseBody = $response->getBody()->getContents();
            $responseCode = $response->getStatusCode();

            $error = json_decode($responseBody);

            if (property_exists($error, 'modelState')) { // validation error
                throw Exception\EntityInvalidException::invalid($responseBody, $responseCode, $error->modelState);
            } else { // general error
                throw Exception\ApiException::translate($responseBody, $responseCode);
            }
        }
    }


}