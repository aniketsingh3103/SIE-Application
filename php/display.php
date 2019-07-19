<html>
<head>
    <title>STATE INSTITUTE OF EDUCATION</title>
	<link href="../style/style.css" rel="stylesheet" type="text/css" media="all">
    <style type="text/css">

    
    .report_table{
    width: 700px;
    height: auto;
    margin: 20px;
    margin-top: 30px;
    margin-bottom: 30px;
    box-shadow: 2px 2px 2px #ccc;
    border: 1px solid #eee;
    border-collapse: collapse;
    float: left;

  }

  
  .th{
    padding-left:20px;
    padding-right:20px

  }
  .td{
  	     border: none;
        border-bottom: 1px solid #eee;
        text-align:left;
        padding: 10px;
        padding-left: 30px;
        padding-right: 30px;

  }
        
  .tr{
  	font-size: 16px;
    text-transform: capitalize;
    border: 1px solid #ccc;
  }
        
        .img{
         width: 150px;
        height: 130px;
        }
.docs{
  float: right;
  width: 500px;
  margin: 40px;
  display: table-row;
}
.docs div{
  width: 200px;
  height: 360px;
  margin-left: 20px;
  margin-bottom: 20px;
  float: left;
  text-align: center;
  box-shadow: 2px 2px 2px #000;
}

.docs div lable{
  background-color: orange;
  color: #fff;
  width: 200px;
  height: 30px;
  display: block;
  padding: 5px;
  }
  #lab{
    cursor: pointer;
    background-color: #1d1934;
  }
.docs img{
  width: 200px;
  height: 300px;
  border: 2px solid #ccc;
 }

    </style>
    </head>
<body>
    <div class="top"><div class="logo"><img src="../images/logo.png"/></div><div class="lable"><div class="up">Directorat Of Education Andaman And Nicobar</div>State  Institute  Of  Education</div></div>
    




<?php

$check=array('ID','name','father name','mother name','gender','date of birth','disability','sub category',
	'personal reason','class','disability certificate','religion',
  'percentage of disability','economic category', 'social category','mother toung','address','name of distic');
         



if(isset($_GET['name'])&&isset($_GET['dob'])){

$name=$_GET['name'];
$dob=$_GET['dob'];

$parts1 = explode("-", $dob);

$date=$parts1[2]."-".$parts1[1]."-".$parts1[0];
            
if(!empty($name)&&!empty($dob)){

	require'connect.php';

$statement = $db->prepare( "SELECT * FROM personal_info WHERE cswn='".mysql_real_escape_string($name)."'AND dob='".mysql_real_escape_string($date)."'");
$statement->execute();

$row = $statement->fetch();
$id=$row['no'];
$statement = null;
$db=null;
}
$statement = null;
$db=null;
         }else{

if(isset($_GET['id'])){
$id=$_GET['id'];
require'connect.php';

$statement = $db->prepare( "SELECT * FROM personal_info WHERE no=".mysql_real_escape_string($id));
$statement->execute();

$row = $statement->fetch();

$statement = null;
$db=null;

}else{
  $row[0]=0;
}

          }

         
						


?>
<div class="content-panel">
                      
                        
                            <table class="report_table">
                              
                                <tr class="tr">
                                <td class="td">ID</td>
                                <td class="td"> <?php echo $row[0];?></td>
<td class="td" rowspan="4"><img class="img" src="../upload_photo/<?php echo $id;?>.png"/></td>
                                </tr>
                                <tr class="tr">
                                <td class="td">name</td>
                                <td class="td"> <?php echo $row[1];?></td>
                                </tr>
                                <tr class="tr">
                                <td class="td">father name</td>
                                <td class="td"> <?php echo $row[2];?></td>
                                </tr>
                                
                                                            
                                <?php for($i=3;$i<count($row)/2;$i++) { ?>
                              <tr class="tr">
                                <td class="td">
                                      <?php echo $check[$i];?>
                                    </td>
                                    <td class="td">
                                    <?php echo $row[$i];?>
                                    </td>
                                </tr>

                              <?php } ?>
    </table>



 <div class="docs">
  <input type="hidden" id="id" value="<?php echo $id;?>"/>
  <div><lable>Addhar Card</lable><img src="../upload_aadhar/<?php echo $id;?>.png"/><lable id="lab" onclick="lab(1)">View</lable></div>
  <div><lable>Identity Card</lable><img src="../upload_id/<?php echo $id;?>.png"/><lable id="lab" onclick="lab(3)">View</lable></div>
  <div><lable>Date of Birth</lable><img src="../upload_dob/<?php echo $id;?>.png"/><lable id="lab" onclick="lab(2)">View</lable></div>
  </div>   
</div>
<script type="text/javascript">

var lab=function(a){
  var id=document.getElementById("id").value;
  location.href="view.php?a="+a+"&id="+id;
}

</script>
</body>
</html>