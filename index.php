<?php
ob_start();
session_start();
//print_r($_SESSION);

include("includes/dbconnection.php");
?>

<!DOCTYPE html>
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
      
   
   	    
    #sell{
    	background-image: url(image/img4.jpg);
    	background-position: center;
    	background-size: cover;
    	font-family: sans-serif;
    	margin-top: 20px;
    }
     #feedback{
      background-image: url(pic/img9.jpg);
      background-position: center;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 20px;
    }


     .reg{
     	width: 900px;
     	background-color: rgb(0,0,0,6);
     	margin: auto;
     	color: #FFFFFF;
     	padding: 10px 0px 10px 0px;
     	text-align: center;
     	border-radius: 15px 15px 0px 0px;

     } 

     .mainreg{
     	background-color: rgb(0,0,0,0.5);
     	width: 900px;
     	height: auto;
     	text-align: left;
     	margin-top: auto;
     	
     }

     #buy{
      background-image: url(image/img3.jpg);
      background-position: center;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 20px;
    }

     .buyer{
      width: 1350px;
      background-color: rgb(0,0,0,6);
      margin: auto;
      color: #FFFFFF;
      padding: 10px 0px 10px 0px;
      text-align: center;
      border-radius: 15px 15px 0px 0px;

     } 

     .buyreg{
      background-color: rgb(0,0,0,0.5);
      width: 1350px;
      
      text-align: left;
      margin-top: auto;
      
     }
     
      form{
      	padding: 10px;
      }
     .name{
     	margin-left: 25px;
     	margin-top: 30px;
     	width: 300px;
     	color: white;
     	font-size: 18px;
     	font-weight: 700;

     }

     .buyname{
      margin-top: 30px;
      width: 1350px;
      color: white;
      font-size: 18px;
      font-weight: 500;
    }

    table{

      border-color: white;
    }


     input{
     	position: relative;
     	left: 250px;
     	top: -37px;
     	line-height: 35px;
     	width: 480px;
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
       .aboutfood{  
display: grid; grid-template-rows: repeat(1,500px); grid-template-columns: repeat(2,1fr);
}

.oneabout{
        margin-top: 15px;
        background-color: #00FA9A;
        text-align: left;
      } 

.twoabout{
  margin-top: 15px;
        background-color: red;
        text-align: center;
      }
      .three{
     margin-top: 15px;
        background-color: #00FA9A;
        text-align: left;
      } 

.four{
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
      <a href="#feedback">Feedback</a>
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
  if(isset($_REQUEST['num']))
{
  echo "<script>alert('Login Failed.... Your Email or Password may be invalid. ')</script>";
}

if(isset($_REQUEST['msg']))
{
  echo "<script>alert('you are registered successfully....login with email and password to show details ')</script>";
}
if(isset($_REQUEST['check']))
{
  echo "<script>alert('please login first')</script>";
}
if(isset($_REQUEST['logout']))
{
  echo "<script>alert('logout succesfully')</script>";
}
if(isset($_REQUEST['del']))
{
  echo "<script>alert('Delete successfully')</script>";
}
if(isset($_REQUEST['feedback']))
{
  echo "<script>alert('THANK YOU :-) Your feedback is recorded')</script>";
}


?>

	 <section id="about">

  
    <img id='myImg' src='pic/img3.jpg' height="300" width="1350">
    <script src='js/custom.js'></script></section>
        
        <section id="about">

    <div id="ab">
      <font size="20">About Us</font>
      <p>This is our website for all users</p>
    </div>
    <section id="about">
    <div class="aboutfood">
      <div class="oneabout">
       
        <b><font size="15"><i>Easy to sell food grains</i></font><br>
This portal is a medium which will help farmers to sell their own grains at the right prices and on time, the biggest problem for farmers is that after growing the grains, they sell it on time and at a reasonable price, so that they Should also be beneficial, but it is not being done systematically in our country right now.
So that is why it has been attempted to make a proper arrangement through which both buyer and seller can easily do their work.
The farmers have the most difficulty in getting the right price for their grain, and through this, the farmer himself can decide the price of his grains from the cost of his grain and sell it.

In this, whoever is big or small, can contact the farmers directly and buy grains, which has the advantage that the farmers will also get a fair price and the buyer will not have any problem.

In this,all small and big sellers (farmers) can register and at the time of registration they will give their complete information! Such as name, address, mobile number, etc.
All this information is completely safe, it is used to sell the grains, and by visiting the buyer on this portal,how much quantity they need to come and where, then they can easily find and they can sell Can contact directly and can do whatever transaction is done very easily.

In the process of this transaction,the buyer can make cash payment directly to the farmer or can pay the farmer the way he wants.

<font size="5">Some of the following benefits of this portal -</font><br>
*The farmer will have a digital identity.<br>
*Details of how many farmers are with us and what type of farming is done.<br>
*There will be a good relationship between the buyer and the farmer.<br>
*Farmers will get fair price for their food grains.<br>
*Farmers also will not have to bother to sell their grains.<br>
*The buyer can go to the portal and buy grain from the farmer who is in his own area.
Time will be saved.</b></div>
<div class="twoabout">
  <img src="pic/img3.jpg" height="490" width="700">
</div>


</div>


</section>
<section id="contact">
             
      <div id="ab">
      <font size="20">Contact Us</font>
      <p><B>For any confusions or query call or email here, we are always ready for you......THANK YOU :-) </p>
      </div>
      <div class="con">
      
<div class="one">
        <h2>Address:-XYZ Technical University Lucknow</h2><hr>
      <p>Mobile:- XXXXXXXX46,XXXXXXXX56</p><hr>
      <p>Email:- abc123@gmail.com</p><hr>
      <p>Social Icon:-</p><hr>
      <p><img src="image/map.png" height="350"></p> </div>
   
      <div class="two">
        
       

      <img src="pic/devanshi.jpg" height="100" width="100" align="left">Devanshi srivastava<br>MCA(2nd year)<br>MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY, GORAKHPUR<br><br><br><br>
      <img src="pic/amar.jpg" height="100" width="100" align="left">Amar Chauhan<br>MCA(2nd year)<br>MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY, GORAKHPUR<br><br><br><br>
      <img src="pic/garima.jpg" height="100" width="100" align="left">Garima Singh<br>MCA(2nd year)<br>MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY, GORAKHPUR<br><br><br><br>
      <img src="pic/hemant.jpg" height="100" width="100" align="left">Hemant kumar bhaskar<br>MCA(2nd year)<br>MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY, GORAKHPUR<br>
      </div>
    </div>

  </section>
   <section id="feedback">
      <center>
        <div class="reg"><font size="50">feedback form</font></div>
        <div class="mainreg"><form action="process/feedback.php"  method="post" enctype="multipart/form-data">


<div class="name">
Name:
<input type="text" name="name" id="name" size="30"><br>


EmailId
  <input type="email"id="email"name="email" size="30"><br>
address:
<input type="textarea" id="add"name="add" size="30"><br>
Contact number:
<input type="text"id="phone"name="phone" size="30"><br>

Your feedback
  <input type="textarea"  name="feed" id="feed" size="30"><br>

<button type="submit" id="submit" value="submit">Send feedback</button></div></form></div></center></section>

   <section id="sell">
      <center>
      	<div class="reg"><font size="50">Seller Registation form</font></div>
      	<div class="mainreg"><form action="process/seller_reg.php"  method="post" enctype="multipart/form-data">


<div class="name">
Seller Name:
<input type="text" name="name" id="name" size="30"><br>


State
	<input type="State"id=""name="State" size="30"><br>
District:
<input type="text" id="dist"name="dist" size="30"><br>

Pin code:
	<input type="text"  name="pin" id="pin" size="30"><br>
Seller foodgrains Name:
<input type="text"id="fname"name="fname" size="30"><br>

Foodgrains capacity:
<input type="text"id="capacity"name="capacity" size="30"><br>
Foodgrains price/quintal:
<input type="text"id="price"name="price" size="30"><br>

Contact number:
<input type="text"id="phone"name="phone" size="30"><br>



Emailid:
<input type="email"id="email"name="email" size="30"><br>

Password:
<input type="password"id="password"name="password" size="30"><br>


<input type="hidden" name="act" id="act" value="save">

<button type="submit" id="submit" value="submit">Register</button></div></form>
<div style="height: 100px; width:600px; text-align:right; margin-top: 15px; font-size: 25px; color: white;"><i>If you are  already registered then login here...... </i>
<button type="login" id="login" class="login"><a href="login.php">login</button></div>

	               
	               
</div>

</center>
</section>
   <section id="buy">
        <div class="buyer"><font size="50">BUY NOW.........</font></div>
        <div class="buyreg">


<div class="buyname">
<table border="5px">
  <tr>
    <td>Seller Id</td>
    <td>Name</td>
    <td>State</td>
    <td>Distict</td>
    <td>Pin code</td>
    <td>Foodgrains name</td>
    <td>Foodgrains capacity</td>
    <td>Foograins price/quintal</td>
    <td>Contact number</td>
    <td>Email Id</td>
    <td>Buynow</td>

  </tr>
<?php
  global $con;
$sql="SELECT  * FROM seller";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));

while($data=mysqli_fetch_assoc($rs))

{ ?>
<tr>
  <td><?php echo $data['sid'];?></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['State'];?></td>
    <td><?php echo $data['dist'];?></td>
    <td><?php echo $data['pin'];?></td>
    <td><?php echo $data['fname'];?></td>
    <td><?php echo $data['capacity'];?></td>
    <td><?php echo $data['price'];?></td>
    <td><?php echo $data['phone'];?></td>
    <td><?php echo $data['email'];?></td>
    <td><a href='buyerrr.php?id="<?php echo $data['sid']?>"'><b>BUY<b></a></td>
</tr>

<?php
}
?>

 </table>                               
</div>
</section>
   
</body>
</html>