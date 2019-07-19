

<?php

require'validate.php';
require'database.php';
require'fetch.php';
$data2=array();
$form1= array(1 => "name_cswn","mother_name",
					"dob","disability","address",
					"d_cat","percent_d","e_cat",
					"father_name","gender",
					"sub_cat","district_name",
					"p_reason","class",
					"religion","m_tongue",
					 "s_cat");


$log=login();
if($log==true){
$count=validate($form1);

if($count==0){
    
    $no=autogenerate("personal_info");
    $data2=storevalue($form1);
    $insert=insertvalue_1($data2,$no);

    if($insert==1){
        
        $refer="../form2.html";
        header('location:'.$refer);    
        	}else{
    		echo "ERROR IN CONECTION CHECK THE CONNECTION OR CHECK THE LINK";
    	}
        

}else{
          
   echo $form1[$count]." is empty";
}
    }else{

       $refer="../error.html";
        header('location:'.$refer);  
}



?>

