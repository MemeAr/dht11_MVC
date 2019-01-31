<?php
namespace dht11_MVC\model;

class MeasureManager extends DatabaseConnection{
    public function createMeasure(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO data(datetime, temperature, humidity)'.' VALUES(:datetime, :temperature, :humidity)');
        
            $req->execute(array(
                'datetime' => $datetime,
                'temperature' => $temperature,
                'humidity' => $humidity
            )
                );
   }
    
   public function getAllMeasure() {
       $array = [];
       $bdd = $this->dbConnect();
       
       $req = $bdd->query('SELECT * FROM data');
       
       if ($req->excecute()) {
       
           if ($releveRow = $req->fetch()) {
               
               $releve = new Releve();
               
               $releve->temperature = $releveRow['temperature'];
               
               $releve->humidity = $releveRow['humidity'];
               
               $releve->datetime = $releveRow['datetime'];
           }
       }
   }
   
   public function getMeasureById($id) {
       $bdd= $this->dbConnect();
       $req = $bdd->query('SELECT * FROM temperature, humidity, datetime FROM data where id = :id');
       
       $req->bindParam(":id", $id);
       
   }
   
   public function getLastMeasure() {
       $bdd= $this->dbConnect();
       $req = $bdd->query('SELECT * FROM data BY datetime');
       
       return $req;
   }
   
   public function updateMeasure($measure, $id) {
       
   }
   
   public function deleteMeasure($id) {
       
   }
}
    
    
