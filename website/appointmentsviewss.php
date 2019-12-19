<?php include 'webheader.php'; 
include '../system/dbcon.php';?>

<div class="app-body">

<main class="main">
<div class="container-fluid">
<div class="animated fadeIn">    
      
<?php 
$sel=mysqli_query($con,"SELECT * FROM customerappointment WHERE status='1' AND AppoStatus='1' AND CustomerCode='$user' ");
$row=mysqli_num_rows($sel);


$select=mysqli_query($con,"SELECT * FROM appointment WHERE status='1' AND JobStatus=1 AND CustomerCode='$user'");
$row2=mysqli_num_rows($select);

$sele=mysqli_query($con,"SELECT * FROM customerappointment WHERE status='1' AND AppoStatus='0' AND CustomerCode='$user'");
$row3=mysqli_num_rows($sele);

$selec=mysqli_query($con,"SELECT * FROM appointment WHERE status='1' AND JobStatus=0 AND CustomerCode='$user'");
$row4=mysqli_num_rows($selec);

 ?>             
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                     <h2>Appointment Management</h2>
                   <a href="CustomerAppointmentAdd.php" class="btn btn-danger btn-sm fa fa-plus">Add</a></div>
                  <div class="card-body">
                      <div class="col">
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active fa fa-hourglass-2" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending Appointments
                           <span class="badge badge-pill badge-info"><?php echo $row; ?></span></a> 
                       
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fa fa-hourglass-2" id="contact-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="contact" aria-selected="false">Approved Appointments
                          <span class="badge badge-pill badge-success"><?php echo $row3; ?></span></a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link fa fa-hourglass-2" id="contact-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="contact" aria-selected="false">Proccessing Appointments
                          <span class="badge badge-pill badge-warning"><?php echo $row2; ?></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fa fa-check" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Done Appointments
                          <span class="badge badge-pill badge-danger"><?php  echo $row4; ?></span></a>
                      </li>
                    </ul>
                 </div>
                 <div class="tab-content" id="myTab1Content">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table  id ="myTable1"class="table table-responsive-sm table-striped">
              <thead class="table-dark">
                  <tr  >
                    <th>Appointment Code</th>
                    <th>Appointment Date</th>
                    
                    <th>Customer Name</th>
                    <th>Customer Code</th>
                    <th>Description</th>
                    <th></th>
                    
                   
                  </tr>
                </thead>
                <tbody>
                 <?php 
$sel=mysqli_query($con,"SELECT * FROM customerappointment WHERE status='1' AND AppoStatus='1' AND CustomerCode='$user'");
while($row=mysqli_fetch_array($sel)){
  $appocode=$row['AppointmentCode'];
  $cusnm=$row['CustomerName'];
  $appodate=$row['AppointmentDate'];
  $cuscode=$row['CustomerCode'];

  $other=$row['Other'];
  

  
  ?>

                  <tr>
                    <td><?php echo $appocode ;?></td>
                    
                    <td><?php echo $appodate ;?></td>
                    <td><?php echo $cusnm ;?></td>
                    <td><?php echo $cuscode ;?></td>
                    <td><?php echo $other ;?></td>
                    <!-- <td><a href="AppointmentDetails.php?id=<?php echo $regid; ?>" class="btn btn-success">Approve</a></td> -->
                    <td><a href="CustomerAppointmentView.php?id=<?php echo $appocode; ?>" class="btn btn-danger btn-sm fa fa-eye">View</a></td>
                  </tr>

  <?php } ?>
                </tbody>
                 </table>
                      </div>
                       <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                       <table  id ="myTable2"class="table table-responsive-sm table-striped">
                   <thead class="table-dark">
                     <tr  >
                    <th>Cus Appointment Code</th>
                    <th>Appointment Code</th>
                   
                    <th>Customer Name</th>
                    <th>Description</th>
                    <th>Customer Code</th>
                    
                    <th>Ref</th>
                   
                    <th></th>
                    
                    
                </thead>
             <tbody>
                 <?php 
$sele=mysqli_query($con,"SELECT * FROM customerappointment WHERE status='1' AND AppoStatus='0' AND CustomerCode='$user'");
while($row=mysqli_fetch_array($sele)){
  $appocode=$row['AppointmentCode'];
   $cusnm=$row['CustomerName'];
  
  $cuscode=$row['CustomerCode'];

  $other=$row['Other'];
  $find=mysqli_query($con,"SELECT * FROM cusapp_approve WHERE CupAppoCode='$appocode'");
  while($fi=mysqli_fetch_array($find)){
  	$chappocode=$fi['AppointmentCode'];
  }
 
  

  
  ?>

                  <tr>
                    <td><?php echo $appocode ;?></td>
                    <td><?php echo $chappocode ;?></td>
                    
                    
                    <td><?php echo $cusnm ;?></td>
                    <td><?php echo $other ;?></td>
                    <td><?php echo $cuscode ;?></td>
                    
                    <td><?php echo $utype ;?></td>
                  
                   
                     
                    <td><a href="CustomerAppointmentViewPr.php?id=<?php echo $chappocode; ?>" class="btn btn-danger btn-sm fa fa-eye"></a></td>
                    
                  </tr>

  <?php } ?>
                </tbody>
                 </table>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       <table  id ="myTable3"class="table table-responsive-sm table-striped">
                   <thead class="table-dark">
                     <tr  >
                    <th>Appointment Code</th>
                    
                    <th>Customer Name</th>
                    <th>Customer Code</th>
                    <th>Description</th>
                    <th>Ref</th>
                    
                  
                  </tr>
                </thead>
                <tbody>
                  <?php 
  
$select=mysqli_query($con,"SELECT * FROM appointment WHERE status='1' AND JobStatus=1 AND CustomerCode='$user'");
while($row=mysqli_fetch_array($select)){
  $appocode=$row['AppointmentCode'];
  $cusnm=$row['FirstName'];
  $cuscode=$row['CustomerCode'];
  $other=$row['Other'];
  $ref=$row['EmployeeCode'];
  $sel=mysqli_query($con,"SELECT * FROM user WHERE Username='$ref'");
  while($row1=mysqli_fetch_array($sel)){
  	$empnm=$row1['FullName'];
  }

  
  ?>
                  <tr>
                    <td><?php echo $appocode ;?></td>
                    <td><?php echo $cusnm ;?></td>
                    <td><?php echo $cuscode ;?></td>
                    <td><?php echo $other ;?></td>
                    <td><?php echo $empnm ;?></td>
                    
                    
                    
                  </tr>

  <?php } ?>
                </tbody>
                 </table>
                      </div>
                      
                 <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="profile-tab">
                  <table  id ="myTable4"class="table table-responsive-sm table-striped">
                   <thead class="table-dark">
                     <tr  >
                    <th>Appo Code</th>
                    
                    <th>Customer Code</th>
                    <th>Vehicle No</th>
                    <th>Completed Date</th>
                    <th>Charge</th>
                    <th>Spp Price</th>
                    <th>Total</th>
                    
                  </tr>
                </thead>
                <tbody>
                                    <?php 
  
$selec=mysqli_query($con,"SELECT * FROM appointment WHERE status='1' AND JobStatus='0' AND CustomerCode='$user'");
while($row=mysqli_fetch_array($selec)){
  $appocode=$row['AppointmentCode'];
  $cusnm=$row['FirstName'];
  $cuscode=$row['CustomerCode'];
  $vehno=$row['VehNo'];
 
  $ref=$row['EmployeeCode'];
  $sel=mysqli_query($con,"SELECT * FROM user WHERE Username='$ref'");
  while($row1=mysqli_fetch_array($sel)){
    $empnm=$row1['FullName'];
  }
 $se=mysqli_query($con,"SELECT * FROM appo_invoice WHERE AppointmentCode='$appocode'");
  while($roww=mysqli_fetch_array($se)){
    $date=$roww['ComDate'];
    $servicech=$roww['ServiceCharge'];
    $sppprice=$roww['SppPrice'];
    $total=$servicech+$sppprice;


    // $date=$roww['ComDate'];
  }
  
  ?>
                  <tr>
                    <td><?php echo $appocode ; ?></td>
                    <td><?php echo $cusnm ; ?></td>
                    <td><?php echo $vehno ; ?></td>
                    <td><?php echo $date ; ?></td>
                    <td><?php echo $servicech ; ?></td>
                    <td><?php echo $sppprice ; ?></td>
                    <td><?php echo $total.'.00' ; ?></td>

                    <?php } ?>
                   
                  </tr>
                </tbody>
                 </table>
                      </div>
                    </div>
              
                       </div>
                      </div>
                      </div>  


                  </div>
                </div>
              </div>
                      </div>
                    </div>

                </div>
              </div>
            </main>
          </div>
        <?php 
        include 'webfooter.php';
        include '../system/scripts.php'; ?>
  <script>
        $(document).ready( function () {
    $('#myTable1').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
    $('#myTable4').DataTable();
    } );
  </script>
          </body>
</html>
