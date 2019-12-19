<?php 

include 'webheader.php';

?>

<div class="app-body">
<main class="main">
<div class="container-fluid">
<div class="animated fadeIn">

<?php  
		
		include ('../system/dbcon.php');
		$request=mysqli_query($con,"SELECT * FROM customer WHERE CustomerId ='$user'");
		// while($row=mysqli_fetch_array($request)){
		// $cusid=$row['CustomerId'];	
		// }
		

 
		?>


          	
          	 <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                  	<h2>Customer Managements</h2>
                  	<div class="form-group row">
                  		<a href="#" data-toggle="modal" data-target="#myModal" class="list-group-item">Oppen</a>
                    	<div class="modal fade" id= "myModal" role="dialog">
                    		<div class="modal-dialog">
	                    		<div class="modal-content">
	                    			<div class="modal-header">
	                    			
	                    				<button type="button" class="close" data-dismiss="modal">&times;</button>
	                    				<h4 class="modal-title">Modal Header</h4>
	                    			</div>
	                    			<div class="modal-body">
	                    				<p>Welcome to hshhsh</p>
	                    			</div>	
	                    			<div class="modal-footer">
	                    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                    			</div>
	                    		</div>	
                    		</div>
						</div>
						
                    		<!-- <a href="#" class="btn btn-link btn-sm fa fa-edit" rel="modal:open" id="pw">Change Your Password</a> -->
<!-- 
							<form action="" class="login_form modal" id="pw" style="display:none;">
							  <h3>Please login to continue</h3>
							  <p><label>Username:</label><input type="text" /></p>
							  <p><label>Password:</label><input type="password" /></p>
							  <p><input type="submit" value="Login" /></p>
							</form>
                     -->


                 </div>
                   </div>
               
              		<div class="tab-content" id="myTab1Content">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table id= "myTable" class="table table-responsive-sm table-striped">
							<thead class="table-dark">
									<tr  >
										<th colspan="2">Personal Details:</th>
										
									</tr>
								</thead>
								<tbody>

<?php 

	while($row=mysqli_fetch_array($request)){
				$fnm=$row['FullName'];
				$username=$row['CustomerId'];
				$nic=$row['NIC'];
				$status=$row['status'];
				$ad1=$row['Address1'];
				$ad2=$row['Address2'];
				$city=$row['city'];
				$contact=$row['ContactNo'];
				$email=$row['Email'];
				$regDate=$row['RegisteredDate'];
				$org=$row['OrganizationName'];
				$gender=$row['Gender'];
?>
									<tr>
										<td>Full Name : </td>
										<td><?php echo $fnm ; ?></td>
									
									</tr>
									<tr>
										<td>NIC No : </td>
										<td><?php echo $nic; ?></td>
									
									</tr>
									<tr>
										<td>Gender : </td>
										<td><?php echo $gender; ?></td>
									
									</tr>
									<tr>
										<td>Registered Date : </td>
										<td><?php echo $regDate; ?></td>
									
									</tr>


								</tbody>
								<thead class="table-dark">
									<tr  >
										<th colspan="2">Contact Details</th>
										
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>Address1 : </td>
										<td><?php echo $ad1; ?></td>
									
									</tr>
									<tr>
										<td>Address2 : </td>
										<td><?php echo $ad2; ?></td>
									
									</tr>
									<tr>
										<td>City : </td>
										<td><?php echo $city; ?></td>
									
									</tr>
									<tr>
										<td>Email : </td>
										<td><?php echo $email; ?></td>
									
									</tr>
									<tr>
										<td>Contact No : </td>
										<td><?php echo $contact; ?></td>
									
									</tr>
									</tbody>
								
								<thead class="table-dark">
									<tr  >
										<th colspan="2">Official Details:</th>
										
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>Organization Name : </td>
										<td><?php echo $org; ?></td>
									
									</tr>
									<tr>
										<td>User Name : </td>
										<td><?php echo $username; ?></td>
									
									</tr>
								</tbody>
								
								<?php 								
}
?>
					</table>
                 			 </div>
                			</div>
              				</div>	


                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
              </div>
              </div>
              <!-- /.col-->
             
            </div>
          </div>
</main>

	
	<?php include 'webfooter.php';
	include'../system/scripts.php'; ?>
	  </body>
</html>
	

<script>
	
	$('#myModal').modal();
</script>
	

	

