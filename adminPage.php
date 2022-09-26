<center>
<table border="1" cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th> id </th>
		<th> name </th>
		<th> email </th>
		<th>mobile</th>
		<th>password</th>
		<th>dateofbrith</th>

	</tr>
</thead>
<tbody>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$conn = new PDO("mysql:host=$servername;dbname=advanced", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $conn->prepare("SELECT * FROM users ORDER BY idnumber");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['idnumber']; ?></td>
		<td><?php echo $row['fullname']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php echo $row['dateofbirth']; ?></td>



        <td><a href="deletepage.php?id=<?php echo $row['idnumber'];?>"><button>delete</button></a> 
        <a href="updatepage.php?id=<?php echo $row['idnumber'];?>&name=<?php echo $row['fullname'];?>&role=<?php echo $row['IDrol'];?>&mobile=<?php echo $row['mobile'];?>&password=<?php echo $row['password'];?>&date=<?php echo $row['dateofbirth']; ?>&email=<?php echo $row['email']; ?>"><button>update</button></a>
    </td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
</center>