<?php
include('class_lib/MurachDB_Access.php');

$DB_Access = new MurachDB_Access(); 

$DB_Result = $DB_Access->showTables(); //This API Tester only shows tables
$rValue = "";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value ";
			}
		}
$data = array();
$data['tablesList'] = $rValue; //"TestValue";

print(json_encode($data));



?>
