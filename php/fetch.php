<?php
function getdata($reg_no){

require'connect.php';
	
try{


						$statement = $db->prepare("SELECT * FROM personal_info WHERE no=$reg_no");
						$run=$statement->execute();
	 				

                   if(!$run){
                   echo "error in exe";
                   return 0;
                       }else{
                       	
                       	$row = $statement->fetch() ;
                       if(empty($row))  { return 1; }  
                                      else{   return $row;    }
                       }

                   }
                   
                   catch(Exception $error){  echo "error ocured" . $error->getMessage();     return 0;  }

                 }


function autogenerate($table){
$no=0;
  $db_server = mysql_connect("localhost", "root", "");
if (!$db_server) {
  die("Unable to connect to MySQL: " . mysql_error());}

  if(!mysql_select_db("sie")){
  die("Unable to select database: " . mysql_error());}
$query = "SELECT no FROM $table";
$result = mysql_query($query);

$rows = mysql_num_rows($result);

return $rows+1;
}
?>