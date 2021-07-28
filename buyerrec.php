
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
        <div class="reg"><font size="50">login</font></div>
        <div class="mainreg">

<div class="name">
Merchant Name:-&nbsp;&nbsp;<?php echo $data['name']; ?><br><br>

Contact number:- &nbsp;&nbsp; <?php echo $data['State']; ?>
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
Payable Amount:-&nbsp;&nbsp;<?php echo $data['capacity']; ?>
<br>
<br>
Seller name:-&nbsp;&nbsp;<?php echo $data['price']; ?>
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
Receivable Amount:-&nbsp;&nbsp;<?php echo $data['capacity']; ?>
<br>
<br>

</div>

</form>
</div>
</center>
</section>
</body>
</html>