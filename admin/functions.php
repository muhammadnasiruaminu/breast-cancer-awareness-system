<?php 
	function usersInfor()
	{
		include 'db_connection.php';

		$sqlQuery = "SELECT * FROM users";
		$result = mysqli_query($conn, $sqlQuery);

		if($result)
		{
			$sn = 0;
			while ($row = mysqli_fetch_assoc($result)) 
			{ 
				$id = $row['id'];
				$sn++;
				$firstName = $row['first_name'];
				$otherName = $row['other_name'];
				$emailAddress = $row['email'];
				$phoneNumber = $row['phone_number'];
				$age = $row['age'];
				$gender = $row['gender'];
				
				echo "<tr>
					<td>$sn</td>
					<td>$firstName $otherName</td>
					<td>$emailAddress</td>
					<td>$phoneNumber</td>
					<td>$age</td>
					<td>$gender</td>
					<td>
						<td>
							<a href='reply.php?viewQ=$id' class='btn btn-soft-dark btn-sm btn-transition' >
							  View Questionnaire
							</a>
						</td>
						<td>
							<a href='delete.php?delete=$id' class='btn btn-danger btn-sm btn-transition'>Delete</a>
						</td>
					</td>
				</tr>";
			}
			$sn++;
		}

	}
?>