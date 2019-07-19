<html>
<head>
    <title>STATE INSTITUTE OF EDUCATION</title>
	<link href="../style/style.css" rel="stylesheet" type="text/css" media="all">
    <style type="text/css">
    .content-panel{
      position: relative;
      top: 50px;
      }
   .report_table{
    margin: 0 auto;
    box-shadow: 2px 2px 2px #ccc;
    border: 1px solid #eee;
    border-collapse: collapse;
    margin-bottom: 10px;
 
  }

  .report_head{
    background-color: #484067;
    color: white;
    font-size: 16px;
    text-transform: capitalize;
  }
  .th{
    padding-left:20px;
    padding-right:20px
}
  
  .td{
       border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        text-align:left;
        padding: 10px;
        padding-left: 30px;
        padding-right: 30px;

  }
  .tr{
    font-size: 14px;
    text-transform: capitalize;
    border: 1px solid #ccc;
  }
    </style>
    </head>
<body>
    <div class="top"><div class="logo"><img src="../images/logo.png"/></div><div class="lable"><div class="up">Directorat Of Education Andaman And Nicobar</div>State  Institute  Of  Education</div></div>
    <div class="menu"><div class="nav">
        <ul>
            <li ><a href="../index.php">Home</a></li>
            <li ><a href="../report.html">Report</a></li> 
            <li ><a href="../student.html">Students</a></li>
            <li ><a href="../about.html">About</a></li>
        </ul></div></div>

<?php
$check=array();
$check1=array();
$check2=array();
$check3=array();
if(isset($_GET['f_a']))  {  $check1 = $_GET['f_a']; }
if(isset($_GET['f_a1'])) {  $check2 = $_GET['f_a1']; }
if(isset($_GET['f_a2'])) {  $check3 = $_GET['f_a2'];   }
  
if(isset($check1))  
$check=$check1 ; 
if(isset($check2))     
$check=array_merge($check,$check2) ;
if(isset($check3))
$check=array_merge($check,$check3) ;

require'database.php';

$form2=array('ID'=>"no",'name'=>"cswn",'date of birth'=>"dob",'address'=>"address",'disability'=>"disability",
  'percentage of disability'=>"percent_d",'economic category'=>"e_cat",'father name' =>"f_name",'gender'=>"gender",
         'class'=>"class",'religion'=>"religion",'mother toung'=>"m_tongue",'mother name'=>"m_name",
         'sub category'=>"sub_cat",'social category'=>"s_cat");
         
          


$form4=array('ID'=>"no",'school name'=>"school_name",'admission no'=>"add_no",
                    'date of admission'=>"dob_add",
                    'name of brc'=>"name_brc",'siblings'=>"no_sibling",
                    'card no'=>"card_no",'source'=>"source",
                   'father occupation'=>"f_occ",'aids'=>"aids",
                    'card validity'=>"dob_validity",
                    'father income'=>"father_in");

$form5=array('ID'=>"no",'financial assistance'=>"f_a",'bank account'=>"acc_no",
                    'bank name'=>"bank_name",
                    'aadhar no'=>"aadhar_no",'contact no'=>"contact",
                    'birth cry'=>"birth_c",'development milestone'=>"milestone",
                    'psrt name'=>"name_psrt",'birth order'=>"birth_order",
                    'mother age'=>"age_pregancy",
                    'birth maturity'=>"birth_m",'birth weight'=>"birth_w");
          

$store=array();
$store1=array();
$store2=array();
$data_table1=array();
$data_table2=array();
$data_table3=array();

$i=0;$j=0;$k=0;
foreach ($check as $key) {

  if(isset($form2[$key])){
  $store[$i++]=$form2[$key];

}else{

  if(isset($form4[$key])){
  $store1[$j++]=$form4[$key];

      }else{

        if(isset($form5[$key])){
        $store2[$k++]=$form5[$key];

          }
      }
  }
}


if(!empty($check1)){
$data_table1=getrecord($store);}
if(!empty($check2)){
$data_table2=getrecord2($store1);}
if(!empty($check3)){
$data_table3=getrecord3($store2);}



      
      
   
?>
    

			  		
                      <div class="content-panel">
                      
                        
                            <table class="report_table">
                              <thead class="report_head">
                               
                              <tr>
                                <td class="th">ID</td>
                                  <?php foreach ($check1 as $key){ ?>
                                    <td class="th">
                                      <?php echo $key;?>
                                    </td>
                                    <?php } ?>
                                  
                              </tr>
                              </thead>
                              
                              <?php   foreach ($data_table1 as $key) { ?>
                              <tr class="tr">
                                <?php for($l=0;$l<count($key)/2;$l++){ ?>
                                  <td class="td">
                                      <?php echo $key[$l];?>
                                    </td>
                                    <?php } ?>
                                 </tr>
                                      <?php } ?>
                             

                              
    </table>

    <table class="report_table">
                              <thead class="report_head">
                               
                              <tr>
                                
                                  <?php foreach ($check2 as $key){ ?>
                                    <td class="th">
                                      <?php echo $key;?>
                                    </td>
                                    <?php } ?>
                                  
                              </tr>
                              </thead>
                              
                              <?php   foreach ($data_table2 as $key) { ?>
                              <tr class="tr">
                                <?php for($l=0;$l<count($key)/2;$l++){ ?>
                                  <td class="td">
                                      <?php echo $key[$l];?>
                                    </td>
                                    <?php } ?>
                                 </tr>
                                      <?php } ?>
                             

                              
    </table>
<table class="report_table">
                              <thead class="report_head">
                               
                              <tr>
                                
                                  <?php foreach ($check3 as $key){ ?>
                                    <td class="th">
                                      <?php echo $key;?>
                                    </td>
                                    <?php } ?>
                                  
                              </tr>
                              </thead>
                              
                              <?php   foreach ($data_table3 as $key) { ?>
                              <tr class="tr">
                                <?php for($l=0;$l<count($key)/2;$l++){ ?>
                                  <td class="td">
                                      <?php echo $key[$l];?>
                                    </td>
                                    <?php } ?>
                                 </tr>
                                      <?php } ?>
                             

                              
    </table>
    
</div>
    
    

                                   
    
    </body>
</html>