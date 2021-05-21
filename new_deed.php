<?php
include "includes/header.php"; 
//require "db/DB.php"; 
$image = '<img class="avatar img-circle img-thumbnail my_avatar" src="images/'.$_SESSION['profile_picture'].'" alt=""></img>'; 
$avatar = '<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">';
//update profile
if(isset($_POST['save_deed'])) {    
	$first_name = $_POST["first_name"];
	$email = $_POST["email"];
	$id_number = $_POST["id_number"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$province = $_POST["province"];
	$status = $_POST["status"];
	$property = $_POST["property"];

	if($first_name=="" or $id_number==""){
		$reso = "Firstname, ID Number cannot be null";

	}else{
		$create_user=create_deed($first_name, $email, $id_number, $phone, $address, $province, $status, $property);
		// echo $first_name, $email, $id_number, $phone, $address, $province; 
		$reso = "Title Deed Added";
	}
}
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
	<div class="row">
        </div><!--/col-3-->
		<br>
    	<div class="col-sm-9">		
			<div class="tab-content">
				<form class="form" action="" method="POST" id="save_deed">  
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Deed Number</h4></label>
                              <input type="text" class="form-control" placeholder=<?php echo 123455?> title="enter first name." name="first_name" disabled>
                          </div>
                      </div>

					  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="id_number"><h4>Name</h4></label>
                              <input type="text" class="form-control" placeholder="Name" title="enter ID Number." name="first_name" id="first_name" >
                          </div>
                      </div>

					  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="id_number"><h4>Email</h4></label>
                              <input type="email" class="form-control" placeholder="Email" title="enter ID Number." name="email" id="email">
                          </div>
                      </div>
           
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="id_number"><h4>ID Number</h4></label>
                              <input type="text" class="form-control" placeholder="Id number" title="enter ID Number." name="id_number" id="id_number">
                          </div>
                      </div> 

					  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="id_number"><h4>Phone</h4></label>
                              <input type="number" class="form-control" placeholder="Phone number" title="enter ID Number." name="phone" id="phone">
                          </div>
                      </div>

					  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="id_number"><h4>Address</h4></label>
                              <input type="text" class="form-control" placeholder="Address" title="enter ID Number." name="address" name="address">
                          </div>
                      </div>

					  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="id_number">Property Location</h4></label>
                              <input type="text" class="form-control" placeholder="Property Location" title="enter ID Number." name="property" name="property">
                          </div>
                      </div>
                       
                      
					  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="gender"><h4>Province</h4></label>
                              <select class="form-control" name="province">
								  <option value="Harare">Harare</option>
								  <option value="Bulawayo">Bulawayo</option>
								  <option value="Mash East">Mash East</option>
								  <option value="Mash Central">Mash Central</option>
								  <option value="Mash West">Mash West</option>
								  <option value="Masvingo">Masvingo</option>
								  <option value="Midlands">Midlands</option>
								  <option value="Mat North">Mat North</option>
								  <option value="Mat South">Mat South</option>
								</select>
						</div>   

					  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="gender"><h4>Status</h4></label>
                              <select class="form-control" name="status">
								  <option value="1">Sold</option>
								  <option value="0">Not Sold</option>
								</select>
						</div>

                      <div class="form-group">
                          <div class="col-xs-12">
							 <br>
							 <button type="submit" class="btn btn-lg btn-info" name="save_deed" >Save Title Deed</button>
							 <button type="submit" class="btn btn-lg btn-danger" name="clear" >Clear</button>
                          </div>
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
	<!-- modals -->
	
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->

	<!-- for index page weekly sales java script -->
	
	<!-- //for index page weekly sales java script -->


	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

</body>

</html>