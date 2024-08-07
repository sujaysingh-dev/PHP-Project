<?php
include 'connect.php';
class payment extends connect
{
	public function __construct()
	{
		parent::__construct();
	}//end of construct
	public function allsearch()
	{
		if($this->db_found)
		{
			$r=mysqli_query($this->db_found,"select * from payment");
			echo "<center>";
			echo"<h1>All Record Of Payment<h1>";
			echo "<table border=1 bgcolor=cyan>
				<tr>
					<th> Payment Identity </th>
					<th> Customer Identity </th>
					<th> Booking Identity </th>
					<th> First Name </th>
					<th> Last Name </th>
					<th> Credit Card No </th>
					<th> Expire Date</th>
				</tr>";
			while($db_field=mysqli_fetch_assoc($r))
			{
				echo"<tr>";
				echo "<td>".$db_field['paymentid']."</td>";
				echo "<td>".$db_field['customerid']."</td>";
				echo "<td>".$db_field['bookingid']."</td>";
				echo "<td>".$db_field['firstname']."</td>";
				echo "<td>".$db_field['lastname']."</td>";
				echo "<td>".$db_field['creditcardno']."</td>";
				echo "<td>".$db_field['expiredate']."</td>";
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
$ob=new payment();
$ob->allsearch();
?>