<?php

namespace Drupal\remote_properties;

use Drupal\remote_properties\Entity\ResultSet;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Fetches.
 */
class PropertiesFetcher {

  /**
   * Response.json
   */
  const RESPONSE_URL = 'https://raw.githubusercontent.com/adaptdk/backend-novasol-challenge/master/response.json';

  /**
   * The HTTP client to fetch the feed data with.
   *
   * @var \GuzzleHttp\ClientInterface
   */
  protected $httpClient;


  protected $serializer;

  /**
   * Constructs.
   *
   * @param \GuzzleHttp\ClientInterface $http_client
   *   A Guzzle client object.
   */
  public function __construct(ClientInterface $http_client, SerializerInterface $serializer) {
    $this->httpClient = $http_client;
    $this->serializer = $serializer;
  }

  /**
   * Fetch properties.
   *
   * @param $options
   * @return string
   */
  public function fetchProperties($options) {
    $data = NULL;
    try {
      $data = (string) $this->httpClient
        ->get($this::RESPONSE_URL, [
          'query' => $options,
        ])
        ->getBody();
      $data = $this->serializer->deserialize($data, ResultSet::class, 'json');
    }
    catch (RequestException $exception) {
      watchdog_exception('properties', $exception);
    }
    return $data;
  }

}
