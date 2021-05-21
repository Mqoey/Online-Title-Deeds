<?php
include "includes/header.php";
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
//update profile
if(isset($_POST['save_info'])) {    
	$info = $_POST["info"];

	if($info==""){
		$reso = "Report cannot be null";

	}else{
		$create_user=create_report($info); 
		$reso = "Reported";
	}
}

?>
<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">
		<div class="row">
		</div>

		<div class="col-sm-12">
			<div class="tab-content">
				<div class="row  widgettable">
					<form class="form" action="" method="POST" name="save_info">
						<div class="col-sm-6 col-md-6 col-lg-6 content-top-2 card">
							<div class="agileinfo-cdr">
								<div class="form-group">
									<label for="Province">
										<h4>Report Fraud to Admin</h4>
									</label>
										<br><br>
									<input class="form-control" name="info"/>
									<br>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4">
							<button type="submit" class="btn btn-lg btn-info" name="save_info">Report</button>
						</div>

						<div class="form-group">
                          <div class="col-xs-6">
							 <br>
								<p class="text-danger">
								<?php
								if(isset($reso)){
										echo $reso;
									}
								?>
								</p>	
                          </div>
                    </div>
					</form>
				</div>
			</div>
		</div>
    </div>
	</div>
</div>

<!-- //Bootstrap Core JavaScript -->

<?php include "includes/footer.php"; ?>