<html>
<head>
    <title>STATE INSTITUTE OF EDUCATION</title>
	<link href="../style/style.css" rel="stylesheet" type="text/css" media="all">
    <style type="text/css">
    .report_table{
    width: 900px;
    height: auto;
    margin: auto;
    margin-top: 30px;
    margin-bottom: 30px;
    box-shadow: 2px 2px 2px #ccc;
    border: 1px solid #eee;
    border-collapse: collapse;

  }

  .report_head{
    background-color: #484067;
    color: white;
    font-size: 18px;
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
    font-size: 16px;
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

            require 'database.php';

            $a=$_GET['a'];
            $b=$_GET['c'];
            
            $get=array( 1 => "district_name","name_brc","school_name","disability","percent_d","gender","class");
            $table_name=array(1 => "personal_info","basic_info","bank_info");

            $send_val=$get[$a];
            $send_data=$_GET['b'];
            $table=$table_name[$b];

            $recive_data=getstudent($send_val,$send_data,$table);



            ?>


<div class="content-panel">
                      
                        
                            <table class="report_table">
                              <thead class="report_head">
                              <tr>
                                  
                                    <td class="th">
                                    ID
                                    </td>
                                    <td class="th">
                                    Name
                                    </td>
                                    <td class="th">
                                    Father name
                                    </td>
                                    <td class="th">
                                    Mother name
                                    </td>
                                    <td class="th">
                                    Date of birth
                                    </td>
                                   <td class="th">
                                    Gender
                                    </td>
                                  
                              </tr>
                              </thead>
                              <?php   foreach ($recive_data as $key) { ?>
                              <tr class="tr">
                                <?php for($i=0;$i<count($key)/2;$i++) { ?>
                                    <td class="td">
                                      <?php echo $key[$i];?>
                                    </td>
                                    <?php } ?>

                              </tr>

                              <?php } ?>
    </table>

    

    
</div>




       
</body>
</html>