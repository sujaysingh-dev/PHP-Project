<?php
include 'connect.php';
class hotel extends connect
{
	public $t1="",$t2="",$t3="",$t4="",$t5="",$t6="",$t7="",$t8="";
	public function __construct()
	{
		parent::__construct();
                echo "<body><select name=s>";
		$result=mysqli_query($this->db_found, "select staffid from employee");
                echo"<option>Select Maneger ID</option>";
		while($db_field=mysqli_fetch_assoc($result))
		{
			$r=$db_field['staffid'];
			echo "<option>$r</option>";
		}
		echo "</select>";
	}//end of constructor
	public function save()
	{
                if($this->db_found)
		{
				$f=0;
				$result=mysqli_query($this->db_found, "select hotel_id from hotel");
				while($db_field=mysqli_fetch_assoc($result))
				{
					
					if($db_field['hotel_id']==$_POST["t1"])
					{
						$f=1;
						break;
					}
				}
				if($f==0)
				{
		                        $sql="insert into hotel values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]')";
		                        mysqli_query($this->db_found,$sql);
		                        echo "<script>alert('Record Saved')</script>";
                                }
				else
					echo ("<script>alert('Hotel id already exist')</script>");
		}//End of  save
	}
	public function psearch()
	{		
			if($this->db_found)
			{
		
				$result=mysqli_query($this->db_found, "select * from hotel where hotel_id='$_POST[t1]'");
				while($db_field=mysqli_fetch_assoc($result))
				{
					$this->t1=$db_field['hotel_id'];
					$this->t2=$db_field['name'];
					$this->t3=$db_field['address'];
					$this->t4=$db_field['suburb'];
					$this->t5=$db_field['postcode'];
					$this->t6=$db_field['state'];
					$this->t7=$db_field['phoneno'];
					$this->t8=$db_field['managerid'];
				}
				
	    		}
	}
}
$ob=new hotel();
if(isset($_REQUEST["b1"]))
	$ob->save();
if(isset($_REQUEST["b2"]))
	$ob->psearch();
		
	echo"
	
    <form name=f method=post action=Savehotel.php>
		<h1>Hotel Form</h1>
		<label>Hotel Id</label>
		<input type=text  name=t1 value=$ob->t1>
	
		<label>Name</label>
		<input type=text name=t2 onkeypress='return allowOnlyLetters(event)' value=$ob->t2>

		<label>Address</label>
		<input type=text  name=t3 value=$ob->t3>
      
		<label>Suburb</label>
		<input type=text  name=t4 onkeypress='return allowOnlyLetters(event)'value=$ob->t4>
      
		<label>Postcode</label>
		<input type=text  name=t5 onkeypress='return allowOnlyNumbers(event,t5)' value=$ob->t5>
      
		<label>State</label>
		<input type=text  name=t6 onkeypress='return allowOnlyLetters(event)' value=$ob->t6>
      
		<label>Phone No</label>
		<input type=text  name=t7 onkeypress='return allowOnlyNumbers(event,t7)' value=$ob->t7>
      
		<label>Manager Id</label>
		<input type=text  name=t8 value=$ob->t8>

        <input type=button value=New onclick='a()'>
        <input type=submit value=Save name=b1>
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
        f.t8.value=' '
       }
       function h()
       {
	       window.open('mymenu.html','_self')
       }
       function b2()
       {
	      window.open('PartSearchHotel.html','_self')
       }
       function b3()
       {
                window.open('AllsearchHotel.php','_self')
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
 input[type=submit]{
         font-size: 15px;
         font-weight: bold;
         padding: 10px;
         padding-left: 8px;
         padding-right: 8px;
         transition: .8s;
         border-radius: 5px;
         margin: 15px 5px 10px 5px;
         cursor: pointer;
 }
 input[type=button]{
         font-size: 15px;
         font-weight: bold;
         padding: 10px;
         padding-left: 8px;
         padding-right: 8px;
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