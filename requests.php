<?php
include "includes/header.php";
if(isset($_GET['msg'])){
	echo "<script>alert('PDF Created successfully !');</script>";
}
try {
	$query = "SELECT * FROM employees";
	$statement = $db->prepare($query);
	$statement->execute();
	$count = $statement->rowCount();
	$result = $statement->fetchAll();

	$query = "SELECT * FROM people";
	$statement = $db->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	if ($count > 0) { } else {
		$result["status"] = "fail";
	}
} catch (Exception $ex) {
	$result["status"] = $ex->getMessage();
}

?>
<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">

		<div class="row-one widgettable">
			<div class="col-md-12 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
						<h3>All Requests</h3>
					</div>
					<br><br><br>
					<div style="width: 98%; height: 350px">
						<table id="all_data" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Id Number</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Cell</th>
								</tr>
							</thead>
							<tbody class="search_into">
								<?php foreach ($result as $row) : ?>
									<tr>
										<td><?php echo $row['id_no'] ?></td>
										<td><?php echo $row['firstname'] ?></td>
										<td><?php echo $row['lastname'] ?></td>
										<td><?php echo $row['cell'] ?></td>
										</tr>
								<?php endforeach; ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<?php include "includes/footer.php"; ?>