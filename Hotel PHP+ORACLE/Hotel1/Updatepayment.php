<?php
include 'connect.php';
class payment extends connect
{
	public $t1="",$t2="",$t3="",$t4="",$t5="",$t6="",$t7="";
	public function __construct()
	{
		parent::__construct();
                echo "<body><select name=s>";
		$result=mysqli_query($this->db_found, "select customerid from customer");
		echo"<option>Select Customer ID</option>";
		while($db_field=mysqli_fetch_assoc($result))
		{
			$r=$db_field['customerid'];
			echo "<option>$r</option>";
		}
		echo "</select>";
	}//end of constructor
	public function update()
	{
		$sql="update payment set customerid='$_POST[t2]',bookingid='$_POST[t3]',firstname='$_POST[t4]',lastname='$_POST[t5]',
		creditcardno='$_POST[t6]',expiredate='$_POST[t7]' where paymentid='$_POST[t1]'";
		mysqli_query($this->db_found,$sql);
		echo "<script>alert('Record Update')</script>";
	}
	public function psearch()
	{		
			if($this->db_found)
			{
		
				$result=mysqli_query($this->db_found, "select * from payment where paymentid='$_POST[t1]'");
				while($db_field=mysqli_fetch_assoc($result))
				{
					$this->t1=$db_field['paymentid'];
					$this->t2=$db_field['customerid'];
					$this->t3=$db_field['bookingid'];
					$this->t4=$db_field['firstname'];
					$this->t5=$db_field['lastname'];
					$this->t6=$db_field['creditcardno'];
					$this->t7=$db_field['expiredate'];
				}
				
	    		}
	}
}
$ob=new payment();
if(isset($_REQUEST["b1"]))
	$ob->update();
if(isset($_REQUEST["b2"]))
	$ob->psearch();

	echo"
    	<form name=f method=post action=Updatepayment.php>
		<h1>Payment Form</h1>
		<label>Payment Id</label>
		<input type=text  name=t1 value=$ob->t1>
	
		<label>Customer Id</label>
		<input type=text name=t2 value=$ob->t2>
	
		<label>Booking Date</label>
		<input type=date  name=t3 value=$ob->t3>
	
		<label>First Name</label>
		<input type=text  name=t4 onkeypress='return allowOnlyLetters(event)'  value=$ob->t4>
	
		<label>Last Name</label>
		<input type=text  name=t5 onkeypress='return allowOnlyLetters(event)'  value=$ob->t5>
	
		<label>Credit Card No</label>
		<input type=text  name=t6 onkeypress='return allowOnlyNumbers(event,t6)' value=$ob->t6>

		<label>Expire Date</label>
		<input type=date  name=t7 value=$ob->t7>
	
        	<input type=button value=New onclick='a()'>
        	<input type=submit value=Update name=b1>
                <input type=button value=AllSearch onclick=b3()>
                <input type=button value=Psearch onclick=b2()>
		<input type=button value=Home onclick=h()>
   </form>
<script>
      function a()
       {
        f.t1.value=' '
        f.t2.value=' '
        f.t3.value=' '
        f.t4.value=' '
        f.t5.value=' '
        f.t6.value=' '
        f.t7.value=' '
       }
       function h()
       {
	       window.open('mymenu.html','_self')
       }
       function b2()
       {
	      window.open('PartSearchPayment.html','_self')
       }
       function b3()
       {
	       window.open('AllsearchPayment.php','_self')
       }
       function allowOnlyLetters(e)   
       {    
		  
		 var charCode = window.event.keyCode;    
		  if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))    
				  return true;    
		  else  
		  {    
				 alert('Please enter only alphabets');    
				 return false;    
		  }           
       }    
function allowOnlyNumbers(e,t)   
       {    
			 
	       var charCode = window.event.keyCode;   
					       
	       if((charCode > 47 && charCode < 58))
			  return true;    
		  else  
		  {    
			       alert('Please enter only numbers...');  
				 return false;   
			
		  }         
       }  
 </script>
 <style>
 *{
         margin: 0px;
         padding: 0px;
         box-sizing: border-box;
 }
 body{
         background-image: linear-gradient(to right, #cedcc4,#c2dfad,#abdf85,#94df5e);
         position: absolute;
 }
 h1{
         margin-bottom: 20px;
	 text-align: center;
 }
 form{
         padding: 20px;
         margin-top: 20px;
         box-shadow: 2px 5px 20px red;
         width: 455px;
         margin-left: 100%;
 }
 label{
        font-size: 22px; 
        font-weight: bold;
        margin: 4px 4px 4px 4px;
	float: left;
 }
 input[type=text]{
         size: 60px;
         font-size: 20px;
         font-weight: bold;
         outline: none;
         background-color: transparent;
         margin: 4px 4px 4px 4px;
         width: 406px;
         height: 35px;
         color: black;
         border-top-left-radius: 10px;
         border-bottom-right-radius: 10px;
         
 }
 input[type=date]{
        size: 60px;
        font-size: 20px;
        font-weight: bold;
        outline: none;
        background-color: transparent;
        margin: 4px 4px 4px 4px;
        width: 406px;
        height: 35px;
        color: black;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
}
 input[type=submit]{
         font-size: 15px;
         font-weight: bold;
         padding: 10px;
         padding-left: 6px;
         padding-right: 6px;
         transition: .8s;
         border-radius: 5px;
         margin: 15px 5px 10px 5px;
         cursor: pointer;
 }
 input[type=button]{
         font-size: 15px;
         font-weight: bold;
         padding: 10px;
         padding-left: 6px;
         padding-right: 6px;
         transition: .8s;
         border-radius: 5px;
         margin: 5px 5px 5px 8px;
         cursor: pointer;
 }
 input[type=submit]:hover{
         background-color: black;
         color: white;
         transform: scale(1.2);
         box-shadow: 2px 2px 0px rgb(10, 15, 255);
 }
 input[type=button]:hover{
         background-color: black;
         color: white;
         transform: scale(1.2);
         box-shadow: 2px 2px 0px rgb(10, 15, 255);
 }
 select{
        margin-left: 200%;
        padding: 5px 10px;
        background-color: transparent;
        color: black;
        font-weight: bold;
}
</style> 
  ";
?>