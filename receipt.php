<?php
ob_start();
session_start();


include("includes/dbconnection.php");
print_r($_SESSION);
print_r($_REQUEST);
?>
<html>
<head>
  <title>Easy to sell foodgrains</title>
  <link rel="stylesheet" href="style.css">

      <style>

 nav{
        height: 150px; 
        background-color: black;
        text-align:left,center;
      }

      #ab{
        margin-top: 25px;
        background-color: #FFFF66;
        text-align: center;
         height: 100px;
      }
      
   
        
    #login{
      background-image: url(image/img4.jpg);
      background-position: left;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 20px;
      
    }

     .reg{
      width: 500px;
      background-color: rgb(0,0,0,6);
      color: #FFFFFF;
      padding: 10px 0px 10px 0px;
      text-align: center;
      border-radius: 15px 15px 0px 0px;
      margin-top: 30px;

     } 

     .mainreg{
      background-color: rgb(0,0,0,0.5);
      width: 500px;
      text-align: center;
      margin-top: auto;
     
     }
      form{
        padding: 10px;
      }
     .name{
      margin-left:25px; 
      width: 400px;
      color: white;
      font-size: 20px;
      font-weight: 700;
      text-align: left;

     }

     input{
      position: relative;
      left: 200px;
      top: -37px;
      line-height: 35px;
      width: 250px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
     }

     button{
           background-color: #32CD32;
           display: block;
           margin: 20px 0px 0px 20px;
           text-align: center;
           border-radius: 12px;
           border:2px solid #366473;
           padding: 14px 110px;
           outline: none;
           color: white;
           cursor: pointer;
           transition: 0.25px;
           font-size: 18px;

     }

     button:hover{
      background-color: #5390f5;
     }
     .login
     {
           background-color:#008080;
           display: block;
           margin: 10px 0px 0px 10px;
           text-align: center;
           border-radius: 12px;
           border:2px solid #366473;
           padding: 10px 90px;
           outline: none;
           color: white;
           cursor: pointer;
           transition: 0.25px;
           font-size: 18px;
           margin-left: 500px;


     }

     .login:hover{
      background-color: #5390f5;
     }


     .con{  
display: grid; grid-template-rows: repeat(1,500px); grid-template-columns: repeat(2,1fr);
}

.one{
     margin-top: 15px;
        background-color: #00FA9A;
        text-align: left;
      } 

.two{
  margin-top: 15px;
        background-color: red;
        text-align: center;
      }
</style>
</head>

<body>
  <nav><div>
    <img src="image/logo2.jpg" style="height: 80px;width: 80px; border-radius: 50%;">

<font color="white" size="20"><i><b>Easy to sell foodgrains</b></i></font></div>

<div class="menubar">
  <ul>
    <li>
      <a href="#home">Home</a>
    </li>
    <li>
      <a href="#about">About</a>
    </li>
    <li>
      <a href="#contact">Contact</a>
    </li>
    <li>
      <a href="#services">Services</a>
    </li>
    <li>
       <a href="#sell">Sell</a>
   </li>
    <li>
      <a href="#buy">Buy</a>
    </li>
    
      </ul>
</div>
  </nav>
  <section id="login">
      <center>
        <div class="reg"><font size="50">Receipt</font></div>
        <div class="mainreg">
        	<?php
        	global $con;
            $sql="SELECT  * FROM seller WHERE sid=$_SESSION[sid]";
            $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
            $data=mysqli_fetch_assoc($rs);
            $sql1="SELECT  * FROM merchant WHERE aadharnumber=$_REQUEST[aadhar]";
            $rs1=mysqli_query($con,$sql1) or die(mysqli_error($con));
            $data1=mysqli_fetch_assoc($rs1);


        	?>

<div class="name">
Merchant Name:-&nbsp;&nbsp;<?php echo $data1['name']; ?><br><br>

Contact number:- &nbsp;&nbsp; <?php echo $data1['phone']; ?>
<br>
<br>
Emailid:-&nbsp;&nbsp;<?php echo $data1['email']; ?>
<br>
<br>

Adress:-&nbsp;&nbsp;<?php echo $data1['dist']; echo $data1['dist']; ?>
<br>
<br>
Pin code:-&nbsp;&nbsp;<?php echo $data1['pin']; ?>
  <br>
  <br>
Payable Amount:-&nbsp;&nbsp;<?php echo $data1['pamount']; ?>
<br>
<br>
Seller name:-&nbsp;&nbsp;<?php echo $data['name']; ?>
<br>
<br>

Contact number:-&nbsp;&nbsp;<?php echo $data['phone']; ?>
<br>
<br>

Emailid:-&nbsp;&nbsp;<?php echo $data['email']; ?>
<br>
<br>
Adress:-&nbsp;&nbsp;<?php echo $data['dist']; ?>
<br>
<br>
Pin code:-&nbsp;&nbsp;<?php echo $data['pin']; ?>
  <br>
  <br>
Receivable Amount:-&nbsp;&nbsp;<?php echo $data1['pamount']; ?>
<br>
<br>
<?php

  unset($_SESSION['sid']);



?>
</div>
</div>
</center>
</section>
</body>
</html>