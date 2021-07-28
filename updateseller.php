
<?php
ob_start();
session_start();
if($_SESSION['id']=='')
{
  $num=0;
  
header("location:index.php?check=$num");
}

include("includes/dbconnection.php");
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
     	width: 800px;
     	background-color: rgb(0,0,0,6);
     	margin: auto;
     	color: #FFFFFF;
     	padding: 10px 0px 10px 0px;
     	text-align: center;
     	border-radius: 15px 15px 0px 0px;
      margin-top: auto;

     } 

     .mainreg{
     	background-color: rgb(0,0,0,0.5);
     	width: 800px;
     	text-align: center;
     	margin-top: auto;
      height: 800px;
     	
     }
      form{
      	padding: 10px;
      }
     .name{
     	margin-left:25px;
     	width: 700px;
     	color: white;
     	font-size: 18px;
     	font-weight: 700;
      text-align: left;
      font-size: 25px;

     }

     input{
     	position: absolute;
     	left: 600px;
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
           width: 100px;


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
  <?php
  global $con;
$sql="SELECT  * FROM seller WHERE sid='$_SESSION[id]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);

//print_r($data);
?>

 <section id="login">
      <center>
        <div class="reg"><font size="50">Seller Details</font></div>
        <div class="mainreg"><form action="process/update.php" method="post" enctype="multipart/form-data">


<div class="name">
Seller Name:
<input type="text"id="name"name="name" size="30" value="<?php echo $data['name']; ?>"><br><br>

State:<input type="text"id="State"name="State" size="30" value="<?php echo $data['State']; ?>">
<br>
<br>
District:<input type="text"id="dist"name="dist" size="30" value="<?php echo $data['dist']; ?>"><br><br>
Pin code:-<input type="text"id="pin"name="pin" size="30" value="<?php echo $data['pin']; ?>"><br><br>
Foodgrains name:-<input type="text"id="fname"name="fname" size="30" value="<?php echo $data['fname']; ?>"><br><br>

Foodgrains capacity:<input type="text"id="capacity"name="capacity" size="30" value="<?php echo $data['capacity']; ?>"><br><br>
Foodgrains price:<input type="text"id="price"name="price" size="30" value="<?php echo $data['price']; ?>"><br><br>

Contactnumber:-<input type="text"id="phone"name="phone" size="30" value="<?php echo $data['phone']; ?>"><br><br>

Emailid:<input type="text"id="email"name="email" size="30" value="<?php echo $data['email']; ?>"><br><br>

Password:-<input type="text"id="password"name="password" size="30" value="<?php echo $data['password']; ?>"><br><br>
<button type="submit" name="update">Update</button>


</div>
</form>
</div>
</center>
</section>
</body>
</html>