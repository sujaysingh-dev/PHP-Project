<?php
include 'connect.php';
class booking extends connect
{
	public $t1="",$t2="",$t3="",$t4="",$t5="",$t6="",$t7="";
	public function __construct()
	{
		parent::__construct();
	}//end of constructor
	public function delete()
	{
		$sql="delete from booking where bookingid='$_POST[t1]'";
		mysqli_query($this->db_found,$sql);
		echo "<script>alert('Record Deleted')</script>";
	}
	public function psearch()
	{		
			if($this->db_found)
			{
		
				$result=mysqli_query($this->db_found, "select * from booking where bookingid='$_POST[t1]'");
				while($db_field=mysqli_fetch_assoc($result))
				{
					$this->t1=$db_field['bookingid'];
					$this->t2=$db_field['customerid'];
					$this->t3=$db_field['roomid'];
					$this->t4=$db_field['bookingdate'];
					$this->t5=$db_field['checkindate'];
					$this->t6=$db_field['checkoutdate'];
					$this->t7=$db_field['noofnights'];
				}
				
	    		 }
	}
}
$ob=new booking();
if(isset($_REQUEST["b1"]))
	$ob->delete();
if(isset($_REQUEST["b2"]))
	$ob->psearch();


	echo"
    	<form name=f method=post action=Deletebooking.php>
		<h1>Booking Form</h1>
		<label>Booking Id</label>
		<input type=text  name=t1 value=$ob->t1>
	
		<label>Customer Id</label>
		<input type=text name=t2 value=$ob->t2>
	
		<label>Room Id</label>
		<input type=text  name=t3 value=$ob->t3>
	
		<label>Booking Date</label>
		<input type=text  name=t4 value=$ob->t4>
	
		<label>Check In Date</label>
		<input type=text  name=t5 value=$ob->t5>
	
		<label>Check Out Date</label>
		<input type=text  name=t6 value=$ob->t6>
	
		<label>No Of Nights</label>
		<input type=text  name=t7 value=$ob->t7>
	
        	<input type=button value=New onclick='a()'>
        	<input type=submit value=Delete name=b1>
                <input type=button value=AllSearch onclick=b3()>
        	<input type=button value=Psearch onclick=b2()>
		<input type=button value=Home onclick=a()>
	<form>
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
       function a()
       {
	       window.open('mymenu.html','_self')
       }
       function b2()
       {
	      window.open('PartSearchBooking.html','_self')
       }
       function b3()
       {
	       window.open('AllsearchBooking.php','_self')
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
 input[type=submit]{
         font-size: 15px;
         font-weight: bold;
         padding: 10px;
         padding-left: 7px;
         padding-right: 7px;
         transition: .8s;
         border-radius: 5px;
         margin: 15px 5px 10px 5px;
         cursor: pointer;
 }
 input[type=button]{
         font-size: 15px;
         font-weight: bold;
         padding: 10px;
         padding-left: 7px;
         padding-right: 7px;
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
</style> 
  ";
?>