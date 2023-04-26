<?php
include('class_lib/MurachDB_Access.php');

$DB_Access = new MurachDB_Access(); 

$table = $_REQUEST['tableName'];//"products"; //only provide access to products table 

$DB_Result = $DB_Access->displayRecords($table); //This API only shows Records

$data = array(); //create array for JSON to send back

$index = 0;
while($row = $DB_Result->fetch_assoc())
{ $rValue = "";
  foreach($row as $value)
      {$rValue = $rValue . "$value ";}
  $data[] = $rValue; //"TestValue";
}

print(json_encode($data));

?>
