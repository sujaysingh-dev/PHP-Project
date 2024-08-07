<?php
include 'connect.php';
class room extends connect
{
	public function __construct()
	{
		parent::__construct();
	}//end of constructor
        public function allsearch()
	{
		if($this->db_found)
		{
			$r=mysqli_query($this->db_found,"select * from room");
			echo "<center>";
			echo"<h1>All Record Of Room<h1>";
			echo "<table border=1 bgcolor=cyan>
			      <tr>
				      <th>Room Identity</th>
				      <th>Room Type</th>
				      <th>Room Image</th>
				      <th>Room Description</th>
				      <th>Hotel ID</th>
				</tr>";
				
			while($db_field=mysqli_fetch_assoc($r))
			{
			        echo"<tr>";
				echo "<td>".$db_field['roomid']."</td>";
				echo "<td>".$db_field['roomtype']."</td>";
				echo "<td>".$db_field['roomimg']."</td>";
				echo "<td>".$db_field['roomdesc']."</td>";
				echo "<td>".$db_field['hotelid']."</td>";
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
			echo "<input type=button value='Print' onclick=window.print()>";
			
		}
	}
}//End of class
$ob=new room();
$ob->allsearch();
?>
