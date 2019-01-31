<?php

require '../model/measureManager.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="1">
	<meta charset="utf-8">
	<title>Temperature</title>
	<link rel="stylesheet" type="text/css" href="../static/main.css">
</head>
<body>
	<h1>Température</h1>

    <?php
  
    $json_source = file_get_contents('../data.json');
    
    $json_data = json_decode($json_source);
    
    $baragraph_height = 161 + $json_data->temperature * 4;
    
    $baragraph_top = 315 - $json_data->temperature * 4; 
    ?>
    <div>
    	<p>Il fait actuellement <?php echo($json_data -> temperature);?>°C et le taux d'humidité est de
    	<?php echo($json_data -> humidite);?>%.</p>
    	
    	<?php
            $filename = '../data.json';
            if (file_exists($filename)) {
                echo "La météo a été update le : " . date("d-m-Y H:i:s.", filectime($filename));
            }
        ?>
        <div id="thermometer">
  			<div id="bargraph" style=<?php echo "\"height:".$baragraph_height."px; top:".$baragraph_top."px;\"";?>></div>
		</div>
    </div>
    
    <?php 
	
	$req = $bdd->prepare('INSERT INTO data(humidity, temperature) VALUES(:humidity, :temperature)');
	
	$req->execute(array(
	    
	    'humidity' => $json_data->humidity,
	    
	    'temperature' => $json_data->temperature
	    
	));
	
	?>
    
    
</body>