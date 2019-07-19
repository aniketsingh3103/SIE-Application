
<html>
<head>
	<link href="../style/style.css" rel="stylesheet" type="text/css" media="all">
	<style type="text/css">

.docs{
  width: 700px;
  margin: auto;
  margin-top: 10px;
	text-align: center;
  box-shadow: 2px 2px 2px #ccc;
  border: 1px solid #ccc;
}


.docs  lable{
  background-color: orange;
  color: #fff;
  width: 700px;
  height: 30px;
  display: block;
  padding: 5px;
  }


	</style>
</head>



<?php
if(isset($_GET['a'])&&isset($_GET['id'])){

$name=$_GET['a'];
$id=$_GET['id'];

if(!empty($name)&&!empty($id)){
if($name==1){
$folder="upload_aadhar";
$lable="Aadhar Card";
}
if($name==2){
$folder="upload_dob";
$lable="Date of Birth";
}
if($name==3){
$folder="upload_id";
$lable="Identity Card";
}
}else{
$folder=null;
}

          }
          ?>
<body>
<div class="top"><div class="logo"><img src="../images/logo.png"/></div><div class="lable"><div class="up">Directorat Of Education Andaman And Nicobar</div>State  Institute  Of  Education</div></div>

<div class="docs">
  <div><lable><?php echo $lable;?></lable><img src="../<?php echo $folder."/".$id;?>.png"/></div>

  </div>   
</body>
</html>