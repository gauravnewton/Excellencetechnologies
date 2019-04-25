<?php
// configuring database
require_once("configure.php");

$sql = "SELECT * FROM userData order by id desc LIMIT 5";

//grabbing data from db
try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    printErrorMessage($ex->getMessage());
}
$returnArray = array();
if (count($results) > 0) {
	 foreach ($results as $rs) {
	 	$returnArray[] = $rs; 	
	 }
}

echo '<pre>';
 print_r($returnArray);
echo '</pre>';




//saving grabbed data to json file and froced browser to download it.

$file = 'retrivedData.json';
file_put_contents($file, json_encode($returnArray));
header("Content-type: application/json");
header('Content-Disposition: attachment; filename="'.basename($file).'"'); 
header('Content-Length: ' . filesize($file));
readfile($file);
?>