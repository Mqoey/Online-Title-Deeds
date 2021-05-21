<?php

include "includes/header.php";
if(isset($_GET['msg'])){
	echo "<script>alert('PDF Created successfully !');</script>";
}
try {

	$query1 = "SELECT * FROM employees";
	$statement1 = $db->prepare($query1);
	$statement1->execute();
	$count1 = $statement1->rowCount();
	$result1 = $statement1->fetchAll();

	$query = "SELECT * FROM tbl_deeds";
	$statement = $db->prepare($query);
	$statement->execute();
	$count = $statement->rowCount();
	$result = $statement->fetchAll();

} catch (Exception $ex) {
	$result["status"] = $ex->getMessage();
}

?>
<?php if($_SESSION['is_active'] == 1) : ?>
	<?php if($_SESSION['role'] == 'admin') : ?>

<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">
		<div class="col_6">
			<div class="col-md-6 col-offset-4 widget widget1">
				<div class="r3_counter_box">
					<i class="pull-left fa fa-users icon-rounded"></i>
					<div class="stats">
						<h5 id="amount_deposited">
							<strong><?php echo $count1; ?> </strong>
						</h5>
						<span>Users</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 widget widget1">
				<div class="r3_counter_box">
					<i class="pull-left fa fa-globe user2 icon-rounded"></i>
					<div class="stats">
						<h5 id="generated_revenue">
							<strong><?php echo $count; ?></strong>
						</h5>
						<span>Title Deeds</span>
					</div>
				</div>
			</div>

			<div class="clearfix"> </div>
		</div>

		<div class="row-one widgettable">
			<div class="col-md-12 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
						<h2>All Title Deeds</h2>
						<br>
						<a href="pdf/practice.php" class="btn btn-success btn-lg pull-left" >Create PDF</a>
					</div>
					<br><br>
					<div class="panel panel-body">
                    <table id="all_deeds" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Deed Id</th>
                                <th>Property Owner</th>
                                <th>Email</th>
                                <th>Id Number</th>
                                <th>Phone</th>
                                <th>Address</th>
								<th>Property Location</th>
                                <th>Province</th>
                                <th style:align="center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="search_into">
                        <?php foreach($result as $row) : ?>
                            <tr>
                            <?php
                                    $query ="SELECT * FROM tbl_deeds where deed_number=".$row['deed_number'];
                                    $statement = $db->prepare($query);
                                    $statement->execute();
                                    $count= $statement -> rowCount();
                                    $result = $statement->fetchAll();

                                     $deed_number=$result[0]['deed_number'];
                                ?>
                                <td><?php echo $deed_number ?></td>
                                <td><?php echo $row['first_name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['id_number'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['address'] ?></td>
								<td><?php echo $row['property'] ?></td>
                                <td><?php echo $row['province'] ?></td>
                                
								<?php 
                                        if($row['status']==1){
                                            echo "<td><a href='' class='badge badge-success'>Sold</a></td>";
                                        }else{
                                            echo "<td><a href='' class='badge badge-warning'>Not Sold</a></td>";
                                        } 
                                    ?>

                                </td>
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

<?php else: ?>
	<div id="page-wrapper">
	<div class="main-page">
		<div class="row-one widgettable">
			<div class="col-md-12 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
						<h3>News</h3>
					</div>
					<br><br><br>
					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<?php endif ?>

<?php else: ?>

<div class="">
		<div id="page-wrapper">
			<div class="main-page login-page">
				<h2 class="title1" style="color:red">Account Disabled!</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="" method="POST">
							<div class="registration">
								Contact Admin
							</div>
						</form>
					</div>
				</div>				
			</div>
		</div>
	</div>	

<?php endif; ?>
<?php include "includes/footer.php"; ?>