<?php
include 'connect.php';
class login extends connect
{
	
	public function __construct()
	{
		parent::__construct();
	}//end of constructor
	
	 public function login()
	{		
			if($this->db_found)
			{
				$f=0;
				$result=mysqli_query($this->db_found, "select * from login");
				while($db_field=mysqli_fetch_assoc($result))
				{
					if($db_field['id']==$_POST["t1"])
					{
					  if($db_field['pwd']==$_POST["t2"])
					  {
						$f=1;
						break;
					  }
					}
				}
				if($f==1)
				{
					echo "<script>window.open('mymenu.html','_self')</script>";
				}
				else
				{
					echo "<script>alert('Either login id or password is wrong')</script>";
				}
					
			}
	}
}
$ob=new login();
if(isset($_REQUEST["b1"]))
	$ob->login();
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>login.html</title>
</head>
<body>
        <div class='box'>
                <span class='borderline'></span>
        <form name=f  action='login.php' method='post'>
                <h2>Hotel Login</h2>
                <div class='input-box'>
                        <input type='text' required='required' name='t1'>
                        <span>Username</span>
                        <i></i>
                </div>
                <div class='input-box'>
                        <input type='text' required='required' name='t2'>
                        <span>  Password</span>
                        <i></i>
                </div>
                <div class='link'>
                        <a href='#'>Forgot Password</a>
                        <a href='#'>Sign Up</a>
                </div>
                <input type='submit' value='Log in' name='b1'>
        </form>
        </div>
</body>
<style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
}
body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url(login.jpg);
        background-repeat: no-repeat;
        background-size: cover;
}
.box{
        position: relative;
        width: 380px;
        height: 420px;
        background-color: rgba(39, 9, 39, 41);
        border-radius: 5px;
        overflow: hidden;
}
.box::before{
content: ' ';
position: absolute;
top: -50%;
left: -50%;
width: 380px;
height: 420px;
background: linear-gradient(0deg,transparent,transparent, #798ff5,#545ff5,#3f4bf7,#201df7);
z-index: 1;
transform-origin: bottom right;
animation: animate 6s linear infinite;
}
@keyframes animate
{
        0%
        {
                transform: rotate(0deg);
        }
        100%
        {
                transform: rotate(360deg);
        }
}
.box::after{
        content: ' ';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg,transparent,transparent, #798ff5,#545ff5,#3f4bf7,#201df7);
        z-index: 1;
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
        animation-delay: -3s;
}
        @keyframes animate
        {
                0%
                {
                        transform: rotate(0deg);
                }
               100%
                {
                        transform: rotate(360deg);
                }
        }
.borderline{
        position: absolute;
        top: 0;
        inset: 0;
}
.borderline::before{
        content: ' ';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg,transparent,transparent, #f57979,#fa4040,#fd3333,#fc1710);
        z-index: 1;
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
        animation-delay: -1.5s;
}
.borderline::after{
        content: ' ';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg,transparent,transparent, #f57979,#fa4040,#fd3333,#fc1710);
        z-index: 1;
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
        animation-delay: -4.5s;
}
.box form{
        position: absolute;
        inset: 5px;
        background-color: rgb(15, 37, 137);
        padding: 50px 40px;
        border-radius: 8px;
        z-index: 2;
        display: flex;
        flex-direction: column;
}
.box form h2{
        color: white;
        font-weight: bold;
        text-align: center;
        letter-spacing: 1px;
}
.box form .input-box{
        position: relative;
        width: 300px;
        margin-top: 35px;
}
.box form .input-box input[type=text]{
        position: relative;
        width: 100%;
        padding: 20px 10px 10px;
        background-color: transparent;
        border: none;
        outline: none;
        box-shadow: none;
        color: rgb(0, 0, 0);
        font-size: 20px;
        letter-spacing: 1px;
        transition: 0.5s;
        z-index: 10;
}
.box form .input-box span{
        position: absolute;
        left: 0;
        padding: 20px 0px 10px;
        pointer-events: none;
        color: white;
        font-size: 18px;
        letter-spacing: 1px;
        transition: .5s;
}
.box form .input-box input[type=text]:valid ~ span,
.box form .input-box input[type=text]:focus ~ span
{
        color: pink;
        font-size: 19px;
        font-weight: bold;
        transform: translateY(-34px);
}
.box form .input-box i{
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background-color: white;
        border-radius: 4px;
        overflow: hidden;
        transition: 0.5s;
        pointer-events: none;
}
.box form .input-box input[type=text]:valid ~ i,
.box form .input-box input[type=text]:focus ~ i
{
        height: 44px;
}
.box form .link{
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
}
.box form .link a{
        margin: 10px 0;
        font-size: 1rem;
        color: rgb(223, 223, 223);
        text-decoration: none;
}
.box form .link a:hover
{
        color: white;
}
.box form input[type='submit']
{
        border: none;
        outline: none;
        padding: 9px 25px ;
        background-color: #fff;
        cursor: pointer;
        font-size: 1rem;
        border-radius: 4px;
        font-weight: bold;
        width: 100%;
        margin-top: 10px;
}
.box form input[type='submit']:active
{
        opacity: .6;
}
</style>
</html>";
?>