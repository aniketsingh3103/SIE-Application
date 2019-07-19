<?php

session_start();

if(isset($_POST['username'])&&isset($_POST['password'])){

$user_id=$_POST['username'];
$password=$_POST['password'];

if(!empty($user_id)&&!empty($password)){

	require'connect.php';

$statement = $db->prepare( "SELECT username,password FROM sie_table WHERE username='".mysql_real_escape_string($user_id)."'AND password='".mysql_real_escape_string($password)."'");
$statement->execute();

$row = $statement->fetch();
$size=count($row)/2;

if($size==2){

	$user=$row['username'];
	$_SESSION['userid']=$user;

	$refer="../index.php";
	$statement = null;
	$db=null;
	header('location:'.$refer);

}
else{echo "Not found";
	$statement = null;
	$db=null;
}
						}
                                          }else {
										$statement = null;
                    					$db=null;
                    				}
										  
						


?>
