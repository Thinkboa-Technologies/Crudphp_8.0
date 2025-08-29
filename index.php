<?php
include './db/db.php';
?>
<?php include './include/header.php'; ?>
	<div class="container">
<!--Data form--->

<h2 class="mt-5 mb-3">User Data Form</h2>
<form method="POST" action="./helper/create.php" class="p-4 border rounded shadow-sm mb-4">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" id="age" class="form-control" placeholder="Enter Age">
  </div>
  <button type="submit" class="btn btn-primary">Add User</button>
</form>

<h2 class="mt-5 mb-3">User List</h2>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Age</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"]. "</td>";
        echo "<td>" . $row["name"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["age"]. "</td>";
        echo "<td>";
        echo " <a href='update.php?id=".$row['id']."' class='btn btn-warning btn-sm me-2'>Update</a>";
        echo " <a href='delete.php?id=".$row['id']."' class='btn btn-danger btn-sm'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>0 results</td></tr>";
}

?>
  </tbody>
</table>

<h2 class="mt-5 mb-3">Highest Age</h2>
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        User with Highest Age
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM users WHERE age = (SELECT MAX(age) FROM users)";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["age"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No users found with age data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

	</div>
<?php include './include/footer.php'; ?>
</html>
