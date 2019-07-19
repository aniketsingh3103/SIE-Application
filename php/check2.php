

<?php
require'validate.php';
require'database.php';
require'fetch.php';
$data2=array();
$form2= array(1 => "school_name","add_no",
                    "dob_add","name_brc","no_sibling",
                    "card_no","source",
                    "f_occ","aids","details_aids",
                    "dob_validity","father_in");

$log=login();
if($log==true){
$count=validate($form2);


if($count==0){
    
        $no=autogenerate("basic_info");
        $data2=storevalue($form2);
        $insert=insertvalue_2($data2,$no);

    if($insert==1){
        
        $refer="../form3.html";
        header('location:'.$refer);    
        	}else{
    		echo "ERROR IN CONECTION CHECK THE CONNECTION OR CHECK THE LINK";
    	}
        

}else{
          
   echo $form2[$count]." is empty";
   
}
}else{

        $refer="../error.html";
        header('location:'.$refer);  
}
?>

