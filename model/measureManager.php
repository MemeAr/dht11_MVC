<?php
namespace dht11_MVC\model;

class MeasureManager extends DatabaseConnection{
    public function createMeasure(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO data(id, datetime, temperature, humidity)'.' VALUES(:id, :datetime, :temperature, :humidity)');
        
        if ($temperature!='' && $humidity!='') {
            $req->execute(array(
                'temperature'=>$temperature,
                'humidity'=>$humidity
            )
                );
        }
        
   }
    
   public function getAllMeasure() {
       $bdd = $this->dbConnect();
       $req = $bdd->prepare('SELECT * FROM data');
       
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
       
       $req = $bdd->prepare('SELECT * FROM temperature, humidity, datetime FROM data where id = :id');
       
       $req->bindParam(":id", $id);
       
   }
   
   public function getLastMeasure() {
       
   }
   
   public function updateMeasure($measure, $id) {
       
   }
   
   public function deleteMeasure($id) {
       
   }
}
    
    
