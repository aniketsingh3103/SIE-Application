<?php


function insertvalue_1($data,$no){
	require'connect.php';
try{


						$statement = $db->prepare("INSERT INTO personal_info(no,cswn,m_name,
					dob,address,disability,d_cat,percent_d,e_cat,
					f_name,gender,sub_cat,
					district_name,p_reason,class,
					religion,m_tongue,s_cat)"
						. "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

						
						$per=$data[6];

						$date=$data[2];

						$parts = explode("-", $date);
						$putdate=$parts[2]."-".$parts[1]."-".$parts[0];

				$run=$statement->execute(array($no,$data[0],$data[1],$putdate,$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],
					$data[10],$data[11],$data[12],$data[13],$data[14],$data[15],$data[16]));
	 				

                   if(!$run){
                   	$statement = null;
                   	$db=null;
                   	return 0;
                       }else{
                       	$statement = null;
                       	$db=null;
                       	return 1;
                       }

                   }
                   catch(Exception $error){

                   	echo "error ocured" . $error->getMessage();
                   	$statement = null;
                   	$db=null;
                   	return 0;  
                   }

                   
	

}

function insertvalue_2($data,$no){
	require'connect.php';
try{


								$statement = $db->prepare("INSERT INTO basic_info(no,school_name,add_no,
			                    dob_add,name_brc,no_sibling,
			                    card_no,source,
			                    f_occ,aids,details_aids,
			                    dob_validity,father_in)"
						."VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

						$date1=$data[2];
            $date2=$data[10];


						$parts1 = explode("-", $date1);
						$parts2 = explode("-", $date2);
						$putdate1=$parts1[2]."-".$parts1[1]."-".$parts1[0];
						$putdate2=$parts2[2]."-".$parts2[1]."-".$parts2[0];	

				$run=$statement->execute(array($no,$data[0],$data[1],$putdate1,
					$data[3],$data[4],$data[5],$data[6],
					$data[7],$data[8],$data[9],$putdate2,$data[11]));
	 				

                   if(!$run){
                   	$statement = null;
                   	$db=null;
                   	return 0;
                       }else{
                       	$statement = null;
                       	$db=null;
                       	return 1;
                       }

                   }
                   catch(Exception $error){

                   	echo "error ocured" . $error->getMessage();
                   	$statement = null;
                    $db=null;
                   	return 0;  
                    
                   }

                    
	

}

function insertvalue_3($data,$value,$no){
	require'connect.php';
try{


						$statement = $db->prepare("INSERT INTO bank_info(no,f_a,acc_no,
				                    bank_name,branch_name,
				                    aadhar_no,contact,
				                    birth_c,milestone,
				                    name_psrt,birth_order,age_pregancy,
				                    birth_m,birth_w)"
						. "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

					
						
				$run=$statement->execute(array($no,$value,$data[1],$data[2],$data[3],$data[4],
					$data[5],$data[6],$data[7],$data[8],$data[9],
					$data[10],$data[11],$data[12]));
	 				

                   if(!$run){
                   	$statement = null;
                   	$db=null;
                   	return 0;
                       }else{
                       	$statement = null;
                       	$db=null;
                       	return 1;
                       }

                   }
                   catch(Exception $error){

                   	echo "error ocured" . $error->getMessage();

                     $statement = null;
                    $db=null;
                   	
                   	return 0;  


                   }

                  
               }

              


function getrecord($data){
               require'connect.php';
              $record=array();

try{
  $string=null;
  $i=1;
            foreach ($data as $key) {

              if($i==count($data)){
                $string=$string.$key;
              }else{
                  $string=$string.$key.",";
              }
              $i++;
              }
         
          
            $statement = $db->prepare("SELECT no,$string FROM personal_info");
            $run=$statement->execute();
            

                   if(!$run){
                   echo "error in exe";
                   $statement = null;
                    $db=null;
                   return 0;
                       }else{
                        $j=0;

                      while ($row = $statement->fetch()){
                        $record[$j++]=$row;
                      }

                        
                       if(empty($record))  { $statement = null;
                    $db=null;return 1; }  
                                      else{   $statement = null;
                    $db=null; 
                    return $record;   }
                       }

                   }catch(Exception $error){  echo "error ocured" . $error->getMessage();    
                    $statement = null;
                    $db=null; return 0;}

                    

                   }


function getrecord2($data){
               require'connect.php';
              $record=array();

try{
  $string=null;
  $i=1;
            foreach ($data as $key) {

              if($i==count($data)){
                $string=$string.$key;
              }else{
                  $string=$string.$key.",";
              }
              $i++;
              }

       
          
            $statement = $db->prepare("SELECT $string FROM basic_info");
            $run=$statement->execute();
            

                   if(!$run){
                   echo "error in exe";$statement = null;
                    $db=null;
                   return 0;
                       }else{
                        $j=0;

                      while ($row = $statement->fetch()){
                        $record[$j++]=$row;
                      }
                        
                       if(empty($record))  { $statement = null;
                    $db=null;return 1; }  
                                      else{   $statement = null;
                    $db=null; 
                    return $record;   }
                       }

                   }catch(Exception $error){  echo "error ocured" . $error->getMessage();    
                    $statement = null;
                    $db=null; return 0;}

                    

                   }


function getrecord3($data){
               require'connect.php';
              $record=array();

try{
  $string=null;
  $i=1;
            foreach ($data as $key) {

              if($i==count($data)){
                $string=$string.$key;
              }else{
                  $string=$string.$key.",";
              }
              $i++;
              }
             
         
          
            $statement = $db->prepare("SELECT $string FROM bank_info");
            $run=$statement->execute();
            

                   if(!$run){
                   echo "error in exe";$statement = null;
                    $db=null;
                   return 0;
                       }else{
                        $j=0;

                      while ($row = $statement->fetch()){
                        $record[$j++]=$row;
                        
                      }
                        
                       if(empty($record))  { $statement = null;
                    $db=null;return 1; }  
                                      else{   $statement = null;
                    $db=null; 
                    return $record;   }
                       }

                   }catch(Exception $error){  echo "error ocured" . $error->getMessage();    
                    $statement = null;
                    $db=null; return 0;}

                    

                   }



function getstudent($name,$feild,$table){

          require'connect.php';
              
              $record=array();

try{
  
  $no=generateid($name,$feild,$table);
    $j=0;
        for($i=0;$i<count($no);$i++){
            $statement = $db->prepare("SELECT no,cswn,m_name,f_name,dob,gender FROM personal_info WHERE no = $no[$i]");
            $run=$statement->execute();
            
                  if(!$run){
                   echo "error in exe";
                  $statement = null;
                  $db=null;
                   return 0;
                       }else{
                        $row = $statement->fetch();
                        $record[$j++]=$row;
                      }
                    }
                        
                       if(empty($record))  { return 1; $statement = null; $db=null;}  
                                      else{  
                                        $statement = null;
                                        $db=null; 
                                        return $record;   }

                   }catch(Exception $error){
                    echo "error ocured" . $error->getMessage();    $statement = null;
                    $db=null; return 0;  
                  }

                     }


                   



function generateid($name,$feild,$table){

            require'connect.php';
           
           $rec=array();
            $i=0;
            try{
              $statement = $db->prepare("SELECT no FROM $table WHERE $name = '$feild'");
              $run=$statement->execute();
            

                   if(!$run){
                   echo "error in exe";
                   $statement = null;
                    $db=null;
                    return 0;
                       }else{
                      
                       while($row = $statement->fetch()){
                        $rec[$i]=$row['no'];
                        $i++;
                       }
                      }
                       

                    if(empty($rec))  { $statement = null;
                    $db=null;
                    return 0; 
                  }  else{  
                                        $statement = null;
                                        $db=null; 
                                        return $rec;   

                                      
                                    }
                       
                       }catch(Exception $error){  
                    echo "error ocured" . $error->getMessage();    
                    $statement = null;
                    $db=null; return 0;  }
}
?>