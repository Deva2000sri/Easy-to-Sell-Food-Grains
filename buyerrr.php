<?php
ob_start();
session_start();

include("includes/dbconnection.php");
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
      margin: auto;
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
      margin-left: 25px;
      margin-top: 30px;
      width: 200px;
      color: white;
      font-size: 18px;
      font-weight: 700;

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
        <div class="reg"><font size="50">Fill your details</font></div>
        <div class="mainreg"><form action="process/buyer_reg.php"  method="post" enctype="multipart/form-data">
        	
<div class="name">
Merchant Name:
<input type="text" name="name" id="name" size="30"><br>


State:
  <input type="State"id=""name="State" size="30"><br>
District:
<input type="text" id="dist"name="dist" size="30"><br>

Pin code:
  <input type="text"  name="pin" id="pin" size="30"><br>
Foodgrains amount:
<input type="text"id="famount"name="famount" size="30"><br>

Contact number
<input type="text"id="phone"name="phone" size="30"><br>

Emailid:
<input type="email"id="email"name="email" size="30"><br>
Aadhar Number:
<input type="text" name="Aadhar" id="Aadhar" size="30"><br>


<button type="submit" id="submit" value="submit">Buy</button></div></form>

</div>
</form>
<?php
        	if($_REQUEST)
        	{
        		$_SESSION['sid']=$_REQUEST['id'];
	
        	}
        	?>

</div>
</center>
</section>
</body>
</html>