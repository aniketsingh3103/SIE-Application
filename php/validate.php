<?php
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER'])){
$refer=$_SERVER['HTTP_REFERER'];
}




function validate($form1){
$count1=0;
$size=count($form1);
for($i=1;$i<=$size;$i++){
 if(empty($_POST[$form1[$i]])){
   $count1=$i;
     break;
 }
        }
return $count1;
    }

function storevalue($form1){
    $values=array();
    $size=count($form1);
    for($i=1;$i<=$size;$i++){
     $values[]=$_POST[$form1[$i]] ;  
    }
return $values;
}

function display($data){

$v_size=count($data);
    
echo"hyee you enterded<br>";
 echo "$v_size";   
    for($i=0;$i<$v_size;$i++){
     echo '<br>'.$data[$i];   
        }
}




function login(){
if(isset($_SESSION['userid'])&&!empty($_SESSION['userid']))
     return true;
     else
     return false;
     }

    function getuser($feild){
       $query="SELECT `$feild`  FROM `tree` WHERE `roll`='".$_SESSION['userid']."'";
       if($queryrun=mysql_query($query)){
       return mysql_result($queryrun,0,$feild);
       }
    }
          
    ?>