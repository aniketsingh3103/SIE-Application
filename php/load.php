<?php
require 'fetch.php';

$no=autogenerate("bank_info");
$no=$no-1;
$ia=array("image","image1","image2","image3");
$flag=0;
$file=null;
foreach ($ia as $key) {
  if(isset($_FILES[$key])){
   $file=$key;
      $errors= array();
      $file_name = $_FILES[$file]['name'];
      $file_size =$_FILES[$file]['size'];
      $file_tmp =$_FILES[$file]['tmp_name'];
      $file_type=$_FILES[$file]['type'];
      $file_ext=strtolower(end(explode('.',$_FILES[$file]['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
         
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         if($file=="image"){  move_uploaded_file($file_tmp,"../upload_photo/".$no.".png");    }
          if($file=="image1"){  move_uploaded_file($file_tmp,"../upload_dob/".$no.".png");    }
           if($file=="image2"){  move_uploaded_file($file_tmp,"../upload_id/".$no.".png");    }
            if($file=="image3"){  move_uploaded_file($file_tmp,"../upload_aadhar/".$no.".png");    }
        header("Location:../upload.html");
      }else{
         print_r($errors);
      }
   }

}
//echo "$photo";
?>