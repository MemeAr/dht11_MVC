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

  public function get($id){
    return $id;
  }

  public function set($id){
    $this->id = $id;
  }
  public function get($datetime){
    return $datetime;
  }

  public function set($datetime){
    $this->datetime = $datetime;
  }
  public function get($temerature){
    return $temerature;
  }

  public function set($temerature){
    $this->temperature = $temerature;
  }
  public function get($humidity){
    return $humidity;
  }

  public function set($humidity){
    $this->$humidity = $humidity;
  }
}
