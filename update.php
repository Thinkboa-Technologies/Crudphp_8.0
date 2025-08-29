<?php
include './db/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<?php include './include/header.php'; ?>
	<div class="container">
		<h2 class="mt-5 mb-3">Update User</h2>
		<form method="POST" action="./helper/update_helper.php" class="p-4 border rounded shadow-sm mb-4">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="mb-3">
				<label for="name" class="form-label">Name</label>
				<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="age" class="form-label">Age</label>
				<input type="number" name="age" id="age" class="form-control" value="<?php echo $row['age']; ?>">
			</div>
			<button type="submit" class="btn btn-primary">Update User</button>
		</form>
	</div>
<?php include './include/footer.php'; ?>
</html>