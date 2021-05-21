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
				<h1>Payment</h1>
					<form class="form" action="" method="POST" name="save_info">
						<div class="col-sm-3 col-md-3 col-lg-3 content-top-2 card">

						<div class="form-group">
								</div>
								Amount
								<br>
								<input type="number"/>
							<div class="agileinfo-cdr">
								
								<select>
								<option>Ecocash</option>
								<option>Visa</option>
								<option>Master Card</option>
								<option>Bank</option>
								<option>One Money</option>
								</select>
							</div>
						<br>
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

			<div class="col-sm-4 col-md-4 col-lg-4">
							<button type="submit" class="btn btn-lg btn-info" name="save_info">Pay</button>
						</div>
		</div>
    </div>
	</div>
</div>

<!-- //Bootstrap Core JavaScript -->

<?php include "includes/footer.php"; ?>