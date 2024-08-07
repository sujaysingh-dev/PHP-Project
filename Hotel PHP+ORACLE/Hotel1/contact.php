<?php
include 'connect.php';
class contact extends connect
{
	public $t1="",$t2="",$t3="",$t4="";
	public function __construct()
	{
		parent::__construct();
	}//end of constructor
	public function save()
	{
                if($this->db_found)
		{
				$f=0;
				$result=mysqli_query($this->db_found, "select fullname from contact");
				while($db_field=mysqli_fetch_assoc($result))
				{
					
					if($db_field['fullname']==$_POST["t1"])
					{
						$f=1;
						break;
					}
				}
				if($f==0)
				{
		                        $sql="insert into contact values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]')";
		                        mysqli_query($this->db_found,$sql);
		                        echo "<script>alert('Record Saved')</script>";
                                }
				
		}//End of  save
	}
	public function psearch()
	{		
			if($this->db_found)
			{
		
				$result=mysqli_query($this->db_found, "select * from contact where fullname='$_POST[t1]'");
				while($db_field=mysqli_fetch_assoc($result))
				{
					$this->t1=$db_field['fullname'];
					$this->t2=$db_field['emailid'];
					$this->t3=$db_field['mobileno'];
					$this->t4=$db_field['emailsubject'];
				}
				
	    		}
	}
}
$ob=new contact();
if(isset($_REQUEST["b1"]))
	$ob->save();
if(isset($_REQUEST["b2"]))
	$ob->psearch();
echo"

<script>
      function a()
       {
        f.t1.value=' '
        f.t2.value=' '
        f.t3.value=' '
        f.t4.value=' '
        f.t5.value=' '
       }
       function h()
       {
	      window.open('mymenu.html','_self')
       }
       function b2()
       {
	      window.open('PartSearchRoom.html','_self')
       }
       function b3()
       {
                window.open('AllsearchRoom.php','_self')
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
 </script>";
 ?>
 