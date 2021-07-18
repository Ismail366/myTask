
<?php 
    
	$errors = "";

	
	$db = mysqli_connect("localhost", "root", "", "todo");

	
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}	

if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
	header('location: index.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>ToDo </title>
</head>
<body>
	<div>
		<h2 style="font-style: 'Hervetica';">ToDo List Application PHP</h2>
	</div>
	<form method="post" action="index.php">
		<input type="text" name="task">
		<button type="submit" name="submit" >Add Task</button>
	</form>
<table>
	<thead>
		<tr>
			<th>N</th>
			<th>Tasks</th>
			<th style="width: 60px;">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php 
		$tasks = mysqli_query($db, "SELECT * FROM tasks");

		$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td> <?php echo $row['task']; ?> </td>
				<td> 
					<a href="index.php?del_task=<?php echo $row['id'] ?>">x</a> 
				</td>
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>
	
<?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
	
</body>
</html>
