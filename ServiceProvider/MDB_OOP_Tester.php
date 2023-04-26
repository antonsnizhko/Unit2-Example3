<?php
include('class_lib/MurachDB_Access.php'); //to provide class/functions for DB Access

//$db = $_REQUEST["db"]; //use defaults instead of a passed value

print("<h3>");

$DB_Access = new MurachDB_Access(); //create a new object from the MurachDB_Access class 

//print($DB_Access->connectTo()); //connectTo( ) called from within the methods in MurachDB_Access

print("<hr />");
$DB_Result = $DB_Access->showDatabases( ); // call the showDatabases function 
$rValue = "List of Databases in MySQL: <br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value <br />";
			}
		}
print($rValue);


print("<hr />");
$DB_Result = $DB_Access->showTables();
$rValue = "List of Tables in murachdb: <br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value <br />";
			}
		}
print($rValue);


print("<hr />");
$table = "food"; //set which table to display records from
$DB_Result = $DB_Access->displayRecords($table);
$rValue = "List of Records from " . $table . " table<br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value "; //display record values with space between
			}
			$rValue = $rValue . "<br />";
		}
print($rValue);

print("<hr />");
$table = "food"; //set which table to display records from
$DB_Result = $DB_Access->selectOne($table);
$rValue = "List of Primary keys from " . $table . " table<br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value "; //display record values with space between
			}
			$rValue = $rValue . "<br />";
		}
print($rValue);


print("</h3>");
 

?>
