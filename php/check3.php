

<?php
require'validate.php';
require'database.php';
require 'fetch.php';
$data2=array();
$form3= array(1 => "f_a","acc_no",
                    "bank_name","branch_name",
                    "aadhar_no","contact",
                    "birth_c","milestone",
                    "name_psrt","birth_order","age_pregnancy",
                    "birth_m","birth_w");

$log=login();
if($log==true){
$check=array();
$values=array();
$check = $_POST['f_a'];
//$check[1]=$_POST['birth_c'];
//$check[2]=$_POST['milestone'];
//$check[3]=$_POST['birth_m'];
//$check[4]=$_POST['birth_w'];
$string=null;
$i=0;
foreach ($check as $key) {
    if($i==0){$string = $key;}else{$string=$string.",".$key;}
	$i++;
}




$count=validate($form3);
if($count==0){
        
        $no=autogenerate("bank_info");
       /// $photo=uploadimg($no);
        $data2=storevalue($form3);
        $insert=insertvalue_3($data2,$string,$no);
        if($insert==1){
             $refer="../upload.html";
        header('location:'.$refer);  
        }else{
    		echo "ERROR IN CONECTION CHECK THE CONNECTION OR CHECK THE LINK";
    	} 

}else{
          
   echo $form3[$count]." is empty";

  
}
}else{
        $refer="../error.html";
        header('location:'.$refer);  
}



?>

