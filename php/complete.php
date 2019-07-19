<html>
<?php
require'connect.php';
$form1= array(0 => "name_cswn","mother_name",
                    "dob","disability","address",
                    "d_cat","percent_d","e_cat",
                    "father_name","gender",
                    "sub_cat","district_name",
                    "p_reason","class",
                    "religion","m_tongue",
                     "s_cat");
?>
<head>
 <title>STATE INSTITUTE OF EDUCATION</title>
	<link href="../style/style.css" rel="stylesheet" type="text/css" media="all">  
    <style type="text/css">
       body{
        //background-image: url(logo.jpg) ;
                 }
    .disp{
     width: 350px;
     height: auto;
        background-color: #d9edf6;
        color: #3a627b;
        text-align: left;
    }
    .disp h4{
        float: left;
        width: 100px;

    }
    .disp span{
        float: right;
        width: 100px;
    }
        .next{
            width: 300px;
            margin: inherit;
            background-color: #4a8ecd;
            margin-top: 20px;            
        }
    </style>
    </head>
<body>
    <div class="top">STATE  INSTITUTE  OF  EDUCATION</div>
	
   
        <div class="disp" style="height:50px">Your registeration is successfully done
        </div>
        
   <div class="disp">
<?php
$statement = $db->prepare( "SELECT cswn,m_name,
                    dob,address,disability,d_cat,percent_d,e_cat,
                    f_name,gender,sub_cat,
                    district_name,p_reason,class,
                    religion,m_tongue,s_cat FROM personal_info");
$statement->execute();
$row = $statement->fetch();
$size=count($row)/2;
for($i=0;$i<$size;$i++) {
    echo "<h4>$form1[$i]</h4>:<span>$row[$i]</span>  <br>        ";
}



$statement = null;


?>
   
    
    </body>



</html>