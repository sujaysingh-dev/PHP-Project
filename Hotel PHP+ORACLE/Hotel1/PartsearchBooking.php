<?php
include 'connect.php';
class booking extends connect
{
	public function __construct()
	{
		parent::__construct();
	}//end of construct
	public function psearch()
	{
		if($this->db_found)
		{
			$field=$_POST["s"];
			$value=$_POST["t1"];
			$r=mysqli_query($this->db_found,"select * from booking where   $field='$value'");
			echo "<center>";
			echo" <h1>Particular Record Of Booking<h1>";
			echo "<table border=1 bgcolor=cyan>
				<tr>
					<th> Booking Identity</th>
					<th> Customer Identity</th>
					<th> Room Identity</th>
					<th> Booking Date</th>
					<th> Check In Date</th>
					<th> Check Out Date</th>
					<th> No Of Night</th>
				</tr>";
			while($db_field=mysqli_fetch_assoc($r))
			{
				echo"<tr>";
				echo "<td>".$db_field['bookingid']."</td>";
				echo "<td>".$db_field['customerid']."</td>";
				echo "<td>".$db_field['roomid']."</td>";
				echo "<td>".$db_field['bookingdate']."</td>";
				echo "<td>".$db_field['checkindate']."</td>";
				echo "<td>".$db_field['checkoutdate']."</td>";
				echo "<td>".$db_field['noofnights']."</td>";
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
				font-size: 20px;
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
			font-size: 15px;
		}
		</style>
			";
			echo"<input type=button value='Print' onclick=window.print()>";
		}
	}
}//End of class
$ob=new booking();
$ob->psearch();
?>