<?php
namespace dht11_MVC\model;

/**
 * Class Measure
 */
class Measure{
  private $id;
  private $datetime;
  private $temperature;
  private $humidity;

  function __construct($datetime, $temperature, $humidity):void {
    $this->datetime = $datetime;
    $this->temperature = $temerature;
    $this->humidity = $humidity;
  }
/**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

/**
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

/**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

/**
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

/**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

/**
     * @param mixed $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

/**
     * @param mixed $temperature
     */               
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

/**
     * @param mixed $humidity
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
    }


 
}
