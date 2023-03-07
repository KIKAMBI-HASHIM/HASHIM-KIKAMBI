<!doctype html>
<html lang="en">
<head>
<metsa charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MY WEBSITE</title>
<style>
 *{
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  }
  body{
    background-color: rgb(223, 223, 223);
  }
  .container{
    width: 100%;
    height: 100%;
    }
    .container a{
      color: rgb(48, 165, 194);
    }
    header{
      display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 7%;
        background-color: #5c5656;
    }
    .logo{
      cursor: pointer;
    }
    h1{ 
      font-family: ChunkFiveRegular, Georgia, serif;
      font-weight: bold;
      color: orange;
      margin-top: 1%;
    }
    h2{ 
      color: orange;
      font-family: Fixedsys;
      font-weight: bold;
      font-size: 25px;
      margin-top: 3%;
      }
    
    nav ul li{
     list-style: none;
     display: inline-block;
     padding: 0px 20px;
     }
    nav ul li a{
    transition: all 0.3s ease 0s;
    text-decoration: none;
     color: rgb(48, 165, 194);
    }
    nav ul li a:hover{
     color: rgb(255, 94, 0);
     font-size:120%;
     }
     nav ul li .active{
     color: rgb(255, 94, 0);
     font-size:120%;
     }
button{
  padding: 9px 25px;
  background-color: rgba(11, 144, 177, 0.911);
  color: white;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s ease 0s;
}
button:hover{
  background-color: rgba(13, 121, 148, 0.726);
  font-size:100%;
}
button .text{
  background-color: rgb(255, 255, 255);
}
.vab{
  background:#212121;
  padding: 10px 18px;
  text-decoration: none;
  font-weight: bold;
  color: rgb(250, 205, 6);
  display: inline-block;
  margin:30px 0;
  border-radius: 5px;
}
.png{
width: 4%;
height: auto;
}
.box{
  display: flex;
  justify-content: center;
align-items: center;
min-height: 60vh;
}
.contain{
  width: 350px;
  display: flex;
flex-direction: column;
padding: 0 15px 0 15px;
}
span{
  font-size: small;
display: flex;
justify-content: center;
padding: 10px 0 10px 0;
}
h3{
  font-size: 30px;
display: flex;
justify-content: center;
padding: 10px 0 10px;
}
.input-field{
display: flex;
flex-direction: column;
}
.input{
  height: 45px;
width: 100%;
border: none;
outline: none;
border-radius: 30px;
padding: 0 0 0 45px;
background: rgba(0, 0, 0, 0.1);
}
.input1{
  margin-top: 3px;
  margin-bottom: 3px;
  margin-left: 60px;
height: 30px;
width: 60%;
border: none;
outline: none;
border-radius: 30px;
padding: 0 0 0 25px;
background: rgba(0, 0, 0, 0.1);
cursor: pointer;
}
i{
  position: relative;
top: -30px;
left: -150px;
}
::-webkit-input-placeholder{
  font-weight: bold;
}
.submit{
margin-left: 45px;
  background:#212121;
  text-decoration: none;
font-size: 15px;
  font-weight: bold;
  border: none;
  height: 45px;
width: 70%;
left: 30%;
  border-radius: 30px;
  outline: none;
  color: orange;
  cursor: pointer;
transition: .3s;
}
.submit:hover{
  background:#2b2a2a;
  font-size: 17px;
}
.bottom{
margin-left: 50px;
display: flex;
flex-direction: column;
color: black;
margin-top: 5px;
}
.check{
  color: black;
text-decoration: none;
font-size: 12px;
}
textarea{
height: 45px;
width: 85%;
border: none;
outline: none;
border-radius: 30px;
padding: 0 0 0 45px;
background: rgba(0, 0, 0, 0.1);
}
.right label a{
color: black;
text-decoration: none;
font-size: 12px;
}
 </style>
</head>
<body> 
    <div class="container">
        <header>
          <img class="logo" src="kinglogo.png" width="80" height="auto">
            <nav>
                <ul class="nav_links">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="services.html">SERVICES </a></li>
                    <li><a href="Customers.html">CUSTOMERS </a></li>
                    <li><a href="contact.html">CONTACTS</a></li>
                </ul>
            </nav>
          <a class="cta" href="logins.php"><button>HIRE ME</button></a>
        </header>
<center>
    <h1>SIGN UP</h1>
    <div class="box">
      <div class="contain">
        <h3>Regester</h3> 
<form action="signup.php"method="GET">
 <legend><b>Contact details</b></legend> 
    <div class="input-field">
      <input type="text" class="input" name="email" placeholder="Email" required>
      <i><img src="email.png" class="png"></i>
      </div>
      <div class="input-field">
        <input type="text" class="input" name="username" placeholder="Username" required>
        <i><img src="lock.png" class="png"></i>
        </div>
        <div class="input-field" >
          <input type="password" class="input" name="password" placeholder="Password" required>
          <i><img src="user.png" class="png"></i>
        </div>
        <div class="bottom">
    <legend><b>Your Reviews</b></legend>
   <p style="font-size: 13px; font-weight: lighter;">How did you hear about me?</p><select name="Reviews" class="input1"> 
       <option value="Google" name="from" >Google</option>
            <option value="Social media"> Social media</option>
                <option value="Friend">Friend</option>
                <option value="Others">Others</option>  </select>
                             <b>Comment</b>
         <textarea name="comments"  placeholder="Enter   your comments..."></textarea>
          <div class="fox">
          <div class="check">
          <input type="checkbox" name="yes" id="check">
           <label for="check">Sign me up for email updates</label>
          </div>
</div>
  <input class="submit" type="submit"  value="Submit"/>
                    <div class="right">
                      <label><a href="login.html">Have account already?</a></label>
                    </div>
</div>
</div>
</form>
    </div>
  </div>
</center>
</div>
<?php
$email=$_GET["email"];
$username=$_GET["username"];
$password=$_GET["password"];
$Reviews=$_GET["Reviews"];
$comments=$_GET["comments"];
$yes=$_GET["yes"];
$ip=$_SERVER["REMOTE_ADDR"];
$da=date("d/m/y");
$ti=date("h:i:sa");

$f=fopen("data.txt","a");
fwrite($f,"email:".$email."username:".$username."password:".$password.
        "Reviews:".$Reviews."comments:".$comments."yes:".$yes."ip:".$ip.
        "date:".$da."time:".$ti."\n");
        fclose($f);
?>
</body>
</html>