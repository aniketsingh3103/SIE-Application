<html>
<?php
session_start();

if(isset($_SESSION['userid'])){
    $user=$_SESSION['userid'];
}else{
    $user=0;
}
?>
<head>
 <title>SiE</title>
	<link href="style/style.css" rel="stylesheet" type="text/css" media="all">  
    <style type="text/css">
       body{
        
        background-image: url(images/img9.jpg) ;
           background-size: cover;
                 }
        
        .hold{
           width: 100%;
            height: 300px;
            background-color: rgba(0, 0, 0, .3);
            
        }
    .hold .disp{
        width: 28%;
        height: 300px;
        background-color: rgba(0, 0, 0, .3);
        color: orange;
        text-align: center;
        float: right;
        margin: auto;
        margin-right: 10px;
    }
        h4{
            height: 30px;
            background-color:rgba(68, 58, 96, .6);
            margin-top: 0;
           padding: 6px;
           font-size: 12px;
        }
     input{
            float: none;
            width: 200px;
            border-radius: 0px;
            background-color: rgba(0, 0, 0, .047);
            border-radius: 3px;
            border: 1px solid orange;
            color: orange;
            
            
        }
        .next{
            width: 200px;
            margin: auto;
            background-color: rgba(230, 62, 13, .5);
            margin-top: 20px;  
            border-radius: 3px;
            font-size: 14px;
        }
        
       .hold .slide{
         width: 60%;
        float: left;
        margin-left: 10px;
        }
        
        .fotter{
          
            background-color: #484067;
            width: 100%;
            height: 30px;
            font-family: monospace, sans-serif;
            font-size: 14px;
            text-align: center;
            color: white;
            padding: 5px;
            float: bottom;
        }
        .recent{
            margin-top: 10px;
            height: 160px;
            background-color: rgba(0, 0, 0, .3);
            }
        
        
        
        .back_hold{
            position: absolute;
            top: 10em;
            left: 30%;
            padding: 20px;
            background-color: rgba(34, 67, 67, .8);
            visibility: hidden;
            text-align: center;
            border-radius: 10px;
        }
        
        .back_hold .disp_login{
            width: 400px;
            height: 300px;
            background-color: rgba(0, 0, 0, .5);
            margin: auto;
            text-align: center;
            padding: 10px;
            color: orange;
            margin-top: 40px;
            border-radius: 10px;
            
        }
        .back_hold .close{
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }
        .error{
            width: 300px;
            height: 40px;
            box-shadow: 1px 3px 4px #000;
            visibility: hidden;
            background-color: #fff;
            color: #484067;
            position: fixed;
            top: 10%;
            margin: auto;
            padding: 10px;
            font-size: 16px;
            border-radius: 3px;
        }
    
    </style>
    </head>
<body>
    <div class="top"><div class="logo"><img src="images/logo.png"/></div><div class="lable"><div class="up">Directorat Of Education Andaman And Nicobar</div>State  Institute  Of  Education</div></div>
    <div class="menu"><div class="nav">
        <ul>
            <li ><a href="index.php">Home</a></li>
            <li ><a href="report.html">Report</a></li> 
            <li ><a href="student.html">Students</a></li>
            <li ><a href="about.html">About</a></li>
        </ul></div><div class="login" onclick="login('1')"><a id="log" href="#">Login</a></div></div>
    <div class="hold">
        <div class="slide" id="slide">
          <img src="images/img4.png" width="100%" height="300px"/>
            <img src="images/im5.png" width="100%" height="300px"/>
            <img src="images/img3.png" width="100%" height="300px"/>
       </div>
    <form action="php/display.php" method="get" onSubmit="return user_check(this)">
        <div class="disp"><h4>Student Registeration</h4>
            
            <input type="text" name='name' placeholder="Name of the Student" required/><br><br>
            <input type="text" name='dob' placeholder="Date of Birth" required/><br>
            <button class="next">Go to Student</button><br>
            <p class="next" style="padding: 5px;" onclick="form_send()">Add new Student</p><br>
            <h4>SiE Blog</h4>
        </div>
         </form>
    </div>
    <div class="recent"></div>
    <div class="fotter">Developed and Mentained by Dr.B.R.Ambedkar Institute of Technolgy</div>
    
    <div class="back_hold" id="hold_login"><div class="disp_login" id="login">
        <form action="php/login.php" method="post" >
        <h4>User Login</h4>
            <input type="text" name='username' placeholder="Username"/><br><br>
            <input type="password" name='password' placeholder="Password"/><br>
        <button class="next">Login</button><br>
        <p class="next" style="padding: 5px;">Add new members</p><br>
            <h4>SiE Blog</h4>
        </form></div>
    <div  class="close" onclick="login('2')">Close</div>
    </div>
    
    <input type="hidden"  id="user" value="<?php echo $user;?>"/>
    <div class="error" id="error">You must login to Edit/Enter Data</div>
    </body>
    
    
    <script type="text/javascript">
        
        function user_check(form){
	var count=document.getElementById("user").value;
            var message=document.getElementById("error");
if(count!=0){
   return true;
}else{
    message.style.visibility="visible";
    return false;
}
};
        
        

        
        
        
var slideshow =function(container){
        this.image=[];
        this.cur=0;
        
        for(var i=0;i<container.childElementCount;i++){
            this.image.push(container.children[i]);

        }
        
        
        var nextsilde=function(){
            for(var i=0;i<this.image.length;i++){
                this.image[i].style.display="none";
                
            }
            this.image[this.cur].style.display="block";
            
            this.cur++;
            if(this.cur >= this.image.length){
                this.cur=0;
            }
        
        window.setTimeout(nextsilde.bind(this),2000);
        };
        
        nextsilde.call(this);
         
    };
        
    slideshow(document.getElementById("slide"));
        
        
        var login=function(a){
            var l=document.getElementById("hold_login");
            if(a==1){
            l.style.visibility="visible";
            }else{
            l.style.visibility="hidden";
            }
           
            };
        
        
        var change_but=function(){
            var user=document.getElementById("user").value;
            var log=document.getElementById("log");
            if(user!=0){
                    log.innerHTML="Logout";
                    log.href="php/logout.php"
                  }
                };
        
        
        var form_send=function(){
            var user=document.getElementById("user").value;
            var message=document.getElementById("error");

            if(user!=0){ location.href="form1.html";   }

            else{   message.style.visibility="visible";}
        };
        change_but();
             
        
        </script>

</html>