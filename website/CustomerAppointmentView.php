<?php 

include 'webheader.php';

?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nilanka Motors</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../css/style.css">
	
 
	</head>
<div class="app-body">
<main class="main">
<div class="container-fluid">
<div class="animated fadeIn">

<?php  
		$vid=$_GET['id'];
		include ('../system/dbcon.php');
		$request=mysqli_query($con,"SELECT * FROM customerappointment WHERE AppointmentCode ='$vid' AND status='1'");



		
		?>


          
          	 <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                  		<h2>Appointment Managements</h2>
                  	<div class="form-group row">
                  		<div class="col-4">
                    	<a href="CustomerAppointmentViews.php" class="btn btn-danger btn-sm fa fa-eye">Views</a>
                    	</div>
                    	<div class="col-4"></div>
                    	<div class="col-4"><a href="CustomerAppointmentEdit.php?id=<?php echo $vid;  ?>" class="btn btn-success bt-sm fa fa-edit">Edit</a></div>

                 </div>
                   </div>
               
              		<div class="tab-content" id="myTab1Content">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table id= "myTable" class="table table-responsive-sm table-striped">
                    	<thead class="table-dark">
                    			<tr  >
										<th colspan="2" class=>Appointment Details:</th>
										
									</tr>
								</thead>
								<tbody>
							
<?php

	while($row=mysqli_fetch_array($request)){
				$cuscode=$row['CustomerCode'];
				$cusnm=$row['CustomerName'];
				$appocode=$row['AppointmentCode'];
				$appodate=$row['AppointmentDate'];
				$regdate=$row['RegisteredDate'];
				// $status=$row['status'];
				$vehno=$row['VehNo'];
				$vehtype=$row['VehType'];
			$find=mysqli_query($con,"SELECT * FROM vehcletype WHERE Id='$vehtype'");
			while($row1=mysqli_fetch_array($find)){

				$vehtypenm=$row1['VehicleName'];
			}
				$vehbrand=$row['VehBrand'];
				$vehmodel=$row['VehModel'];

				$sec1=$row['sec1'];
				$sec2=$row['sec2'];
				$sec3=$row['sec3'];
				$sec4=$row['sec4'];
				$sec5=$row['sec5'];
				$sec6=$row['sec6'];
				$sec7=$row['Other'];

					


?>


									<tr>
										<td>Customer Name: </td>
										<td><?php echo $cusnm ; ?></td>
									
									</tr>
									<tr>
										<td>Customer Code: </td>
										<td><?php echo $cuscode ; ?></td>
									
									</tr>
									<tr>
										<td>Appointment Code : </td>
										<td><?php echo $appocode ; ?></td>
									
									</tr>
									<tr>
										<td>Appointment Date : </td>
										<td><?php echo $appodate ; ?></td>
									
									</tr>
									<tr>
										<td>Registered Date  : </td>
										<td><?php echo $regdate ; ?></td>
									
									</tr>
									<tr>
										<td>Vehicle No : </td>
										<td><?php echo $vehno ; ?></td>
									
									</tr>
									<tr>
										<td>Vehicle Type : </td>
										<td><?php echo $vehtypenm ; ?></td>
									
									</tr>
									<tr>
										<td>Vehicle Brand : </td>
										<td><?php echo $vehbrand ; ?></td>
									
									</tr>
									
									<tr>
										<td>Vehicle Model : </td>
										<td><?php echo $vehmodel ; ?></td>
									
									</tr>
								</tbody>

									<thead class="table-dark">
                    					<tr  >
										<th colspan="2" >Sections Name:</th>
										
										</tr>

								</thead>
									<tbody>
									<?php if($sec1==1){?>
									<tr>
										
										<td colspan="2"><?php echo "Engine Tune Up" ; ?></td>
									
									</tr>
								<?php }?>
								<?php if($sec2==1){?>
									<tr>
										
										<td colspan="2"><?php echo "Vehicle Scanning" ; ?></td>
									
									</tr>
								<?php }?>
								<?php if($sec3==1){?>
									<tr>
										
										<td colspan="2"><?php echo "Hybrid Repair" ; ?></td>
									
									</tr>
								<?php }?>
								<?php if($sec4==1){?>
									<tr>
										
										<td colspan="2"><?php echo "Running Repair" ; ?></td>
									
									</tr>
								<?php }?>
								<?php if($sec5==1){?>
									<tr>
										
										<td colspan="2"><?php echo "Engine repair" ; ?></td>
									
									</tr>
								<?php }?>
								<?php if($sec6==1){?>
									<tr>
										
										<td colspan="2"><?php echo "Auto Gear Box Repair" ; ?></td>
									
									</tr>
								<?php }?>
								
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
<?php  include 'webfooter.php'; 
 include'../system/scripts.php';

 ?>
   </body>
</html>