<?php

namespace Drupal\remote_properties\Entity;

/**
 * Class Property.
 *
 * @package Drupal\remote_properties\Entity
 */
class Property {
  private $picture;
  private $headLine;
  private $beds;
  private $propertyTypeName;
  private $countryName;
  private $prices;
  private $propertySize;
  private $distanceShop;
  private $distanceWater;
  private $propertyType;
  private $bathrooms;
  private $bedrooms;
  private $score;
  private $lat;
  private $lng;
  private $pets;
  private $rating;
  private $adults;
  private $children;
  private $id;
  private $country;

  /**
   * @return mixed
   */
  public function getPicture()
  {
    return $this->picture;
  }

  /**
   * @param mixed $picture
   */
  public function setPicture($picture)
  {
    $this->picture = $picture;
  }

  /**
   * @return mixed
   */
  public function getHeadLine()
  {
    return $this->headLine;
  }

  /**
   * @param mixed $headLine
   */
  public function setHeadLine($headLine)
  {
    $this->headLine = $headLine;
  }

  /**
   * @return mixed
   */
  public function getBeds()
  {
    return $this->beds;
  }

  /**
   * @param mixed $beds
   */
  public function setBeds($beds)
  {
    $this->beds = $beds;
  }

  /**
   * @return mixed
   */
  public function getPropertyTypeName()
  {
    return $this->propertyTypeName;
  }

  /**
   * @param mixed $propertyTypeName
   */
  public function setPropertyTypeName($propertyTypeName)
  {
    $this->propertyTypeName = $propertyTypeName;
  }

  /**
   * @return mixed
   */
  public function getCountryName()
  {
    return $this->countryName;
  }

  /**
   * @param mixed $countryName
   */
  public function setCountryName($countryName)
  {
    $this->countryName = $countryName;
  }

  /**
   * @return mixed
   */
  public function getPrices()
  {
    return $this->prices;
  }

  /**
   * @param mixed $prices
   */
  public function setPrices($prices)
  {
    $this->prices = $prices;
  }

  /**
   * @return mixed
   */
  public function getPropertySize()
  {
    return $this->propertySize;
  }

  /**
   * @param mixed $propertySize
   */
  public function setPropertySize($propertySize)
  {
    $this->propertySize = $propertySize;
  }

  /**
   * @return mixed
   */
  public function getDistanceShop()
  {
    return $this->distanceShop;
  }

  /**
   * @param mixed $distanceShop
   */
  public function setDistanceShop($distanceShop)
  {
    $this->distanceShop = $distanceShop;
  }

  /**
   * @return mixed
   */
  public function getDistanceWater()
  {
    return $this->distanceWater;
  }

  /**
   * @param mixed $distanceWater
   */
  public function setDistanceWater($distanceWater)
  {
    $this->distanceWater = $distanceWater;
  }

  /**
   * @return mixed
   */
  public function getPropertyType()
  {
    return $this->propertyType;
  }

  /**
   * @param mixed $propertyType
   */
  public function setPropertyType($propertyType)
  {
    $this->propertyType = $propertyType;
  }

  /**
   * @return mixed
   */
  public function getBathrooms()
  {
    return $this->bathrooms;
  }

  /**
   * @param mixed $bathrooms
   */
  public function setBathrooms($bathrooms)
  {
    $this->bathrooms = $bathrooms;
  }

  /**
   * @return mixed
   */
  public function getBedrooms()
  {
    return $this->bedrooms;
  }

  /**
   * @param mixed $bedrooms
   */
  public function setBedrooms($bedrooms)
  {
    $this->bedrooms = $bedrooms;
  }

  /**
   * @return mixed
   */
  public function getScore()
  {
    return $this->score;
  }

  /**
   * @param mixed $score
   */
  public function setScore($score)
  {
    $this->score = $score;
  }

  /**
   * @return mixed
   */
  public function getLat()
  {
    return $this->lat;
  }

  /**
   * @param mixed $lat
   */
  public function setLat($lat)
  {
    $this->lat = $lat;
  }

  /**
   * @return mixed
   */
  public function getLng()
  {
    return $this->lng;
  }

  /**
   * @param mixed $lng
   */
  public function setLng($lng)
  {
    $this->lng = $lng;
  }

  /**
   * @return mixed
   */
  public function getPets()
  {
    return $this->pets;
  }

  /**
   * @param mixed $pets
   */
  public function setPets($pets)
  {
    $this->pets = $pets;
  }

  /**
   * @return mixed
   */
  public function getRating()
  {
    return $this->rating;
  }

  /**
   * @param mixed $rating
   */
  public function setRating($rating)
  {
    $this->rating = $rating;
  }

  /**
   * @return mixed
   */
  public function getAdults()
  {
    return $this->adults;
  }

  /**
   * @param mixed $adults
   */
  public function setAdults($adults)
  {
    $this->adults = $adults;
  }

  /**
   * @return mixed
   */
  public function getChildren()
  {
    return $this->children;
  }

  /**
   * @param mixed $children
   */
  public function setChildren($children)
  {
    $this->children = $children;
  }

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getCountry()
  {
    return $this->country;
  }

  /**
   * @param mixed $country
   */
  public function setCountry($country)
  {
    $this->country = $country;
  }

}
