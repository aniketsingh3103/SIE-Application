<html>
<?php
require'php/connect.php';
?>
<head>
 <title>STATE INSTITUTE OF EDUCATION</title>
	<link href="style/style.css" rel="stylesheet" type="text/css" media="all">  
    <style type="text/css">
       body{
        //background-image: url(logo.jpg) ;
                 }
    .disp{
     width: 350px;
     height: 200px;
        background-color: #d9edf6;
        color: #3a627b;
        text-align: center;
        font-size: 25px;
    }
       
    </style>
    </head>
<body>
    <div class="top">STATE  INSTITUTE  OF  EDUCATION</div>

        <div class="disp">Your registeration is successfully done
        </div>
        
 <div class="disp">
<?php
$statement = $db->prepare( "SELECT * FROM personal_info");
$statement->execute();
$row = $statement->fetch();
$size=count($row)/2;
for($i=0;$i<$size;$i++) {
    echo "$row[$i]          ";
}


$statement = null;


?>

 </diV>
    
    </body>



</html>