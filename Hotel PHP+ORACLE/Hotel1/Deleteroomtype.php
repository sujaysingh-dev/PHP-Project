<?php
include 'connect.php';
class roomtype extends connect
{
	public $t1="",$t2="",$t3="";
	public function __construct()
	{
		parent::__construct();
	}//end of constructor
	public function delete()
	{
		$sql="delete from roomtype where roomtype='$_POST[t1]'";
		mysqli_query($this->db_found,$sql);
		echo "<script>alert('Record Delete')</script>";
	}
	public function psearch()
	{		
			if($this->db_found)
			{
		
				$result=mysqli_query($this->db_found, "select * from roomtype where roomtype='$_POST[t1]'");
				while($db_field=mysqli_fetch_assoc($result))
				{
					$this->t1=$db_field['roomtype'];
					$this->t2=$db_field['roomname'];
					$this->t3=$db_field['roomprice'];
				}
				
	    		}
	}
}
$ob=new roomtype();
if(isset($_REQUEST["b1"]))
	$ob->delete();
if(isset($_REQUEST["b2"]))
	$ob->psearch();
		

	echo"
    <form name=f method=post action=Deleteroomtype.php>
		<h1>Room Type Form<h1>
		<label>Room Type</label>
		<input type=text  name=t1 value=$ob->t1>
	
		<label>Room Name</label>
		<input type=text name=t2 value=$ob->t2>
	
		<label>Room Price</label>
		<input type=text  name=t3 value=$ob->t3>
	
               	<input type=button value=New onclick='a()'>
       		<input type=submit value=Delete name=b1>
                <input type=button value=AllSearch  onclick=b3()>
        	<input type=button value=Psearch onclick=b2()>
		<input type=button value=Home onclick=h()>
   	</form>
<script>
      function a()
       {
        f.t1.value=' '
        f.t2.value=' '
        f.t3.value=' '
       }
       function h()
       {
	       window.open('mymenu.html','_self')
       }
       function b2()
       {
	      window.open('PartSearchRoomtype.html','_self')
       }
       function b3()
       {
	       window.open('AllsearchRoomtype.php','_self')
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
         padding-left: 5px;
         padding-right: 5px;
         transition: .8s;
         border-radius: 5px;
         margin: 15px 5px 10px 5px;
         cursor: pointer;
 }
 input[type=button]{
         font-size: 15px;
         font-weight: bold;
         padding: 10px;
         padding-left: 5px;
         padding-right: 5px;
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