<!DOCTYPE html>
<html>
<head>
	<title>Redlock User Database</title>
	<style>
		table {
			font-family: Helvetica, sans-serif;
			border-collapse: collapse;
			width: 30%;
		}

		td, th {
			border: 1px solid #bbb;
			padding: 8px;
		}

		tr:nth-child(even){background-color: #f1f1f1;}

		tr:hover {background-color: #bbb;}

		th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #450c91;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Redlock User Database</h1>
	<table>
		<thead>
			<tr>
				<th>UserID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jabatan</th>
			</tr>
		</thead>
		<tbody>
			<?php
            $servername = "mysql_db";
            $username = "root";
            $password = "root";
            $dbname = "Redlock";
    
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);            

			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["UserID"]. "</td><td>" . $row["Nama"]. "</td><td>" . $row["Alamat"]. "</td><td>" . $row["Jabatan"]. "</td></tr>";
			    }
				echo "<tr>Jumlah User: " . $result->num_rows . "</tr>";
			$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>

