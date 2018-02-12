<?php

namespace Drupal\remote_properties\Entity;

/**
 * Class ResultSet.
 *
 * @package Drupal\remote_properties\Entity
 */
class ResultSet {
  private $requestTimeMs;
  private $currency;
  private $language;
  private $total;
  private $count;
  private $results;
  private $errorMessages;
  private $offset;
  private $serverIp;
  private $theTime;

  /**
   * @return mixed
   */
  public function getRequestTimeMs()
  {
    return $this->requestTimeMs;
  }

  /**
   * @param mixed $requestTimeMs
   */
  public function setRequestTimeMs($requestTimeMs)
  {
    $this->requestTimeMs = $requestTimeMs;
  }

  /**
   * @return mixed
   */
  public function getCurrency()
  {
    return $this->currency;
  }

  /**
   * @param mixed $currency
   */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }

  /**
   * @return mixed
   */
  public function getLanguage()
  {
    return $this->language;
  }

  /**
   * @param mixed $language
   */
  public function setLanguage($language)
  {
    $this->language = $language;
  }

  /**
   * @return mixed
   */
  public function getTotal()
  {
    return $this->total;
  }

  /**
   * @param mixed $total
   */
  public function setTotal($total)
  {
    $this->total = $total;
  }

  /**
   * @return mixed
   */
  public function getCount()
  {
    return $this->count;
  }

  /**
   * @param mixed $count
   */
  public function setCount($count)
  {
    $this->count = $count;
  }

  /**
   * @return mixed
   */
  public function getResults()
  {
    return $this->results;
  }

  /**
   * @param mixed $results
   */
  public function setResults($results)
  {
    $this->results = $results;
  }

  /**
   * @return mixed
   */
  public function getErrorMessages()
  {
    return $this->errorMessages;
  }

  /**
   * @param mixed $errorMessages
   */
  public function setErrorMessages($errorMessages)
  {
    $this->errorMessages = $errorMessages;
  }

  /**
   * @return mixed
   */
  public function getOffset()
  {
    return $this->offset;
  }

  /**
   * @param mixed $offset
   */
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }

  /**
   * @return mixed
   */
  public function getServerIp()
  {
    return $this->serverIp;
  }

  /**
   * @param mixed $serverIp
   */
  public function setServerIp($serverIp)
  {
    $this->serverIp = $serverIp;
  }

  /**
   * @return mixed
   */
  public function getTheTime()
  {
    return $this->theTime;
  }

  /**
   * @param mixed $theTime
   */
  public function setTheTime($theTime)
  {
    $this->theTime = $theTime;
  }

}
