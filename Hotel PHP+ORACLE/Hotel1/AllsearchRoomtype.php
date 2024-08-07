<?php
include 'connect.php';
class roomtype extends connect
{
	public function __construct()
	{
		parent::__construct();
	}//end of construct
	public function allsearch()
	{
		if($this->db_found)
		{
			$r=mysqli_query($this->db_found,"select * from roomtype");
			echo "<center>";
			echo"<h1>All Record Of Room Type<h1>";
			echo "<table border=1 bgcolor=cyan>
				<tr>
					<th> Room Type </th>
					<th>  Room Name </th>
					<th>  Room Price </th>
				</tr>";
			while($db_field=mysqli_fetch_assoc($r))
			{
				echo"<tr>";
				echo "<td>".$db_field['roomtype']."</td>";
				echo "<td>".$db_field['roomname']."</td>";
				echo "<td>".$db_field['roomprice']."</td>";
				echo"</tr>";
			}
			echo"</table>
			<style>
        *{
                margin-top: 10px;
                padding: 0px;
                box-sizing: border-box;
        }
        h1{
                color: black;
                font-size: 40px;
                text-shadow: 2px 2px solid red;
        }
       table{
                border: 2px solid red;
                font-size: 25px;
		padding: 5px;
	}
       th{
		font-weight: bold;
                padding: 5px;
                border: 2px solid black;
                padding-left: 25px;
                padding-right: 25px;
                background-color: palegreen;
       }
       td{
	padding: 1px;
	border: 2px solid black;
	padding-left: 25px;
	padding-right: 25px;
	background-color: palegreen;
	text-aling: center;
	font-size: 20px;
}
</style>
			";
			echo"<input type=button value='Print' onclick=window.print()>";
		}
	}
}//End of class
$ob=new roomtype();
$ob->allsearch();
?>