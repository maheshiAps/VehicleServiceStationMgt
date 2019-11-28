<?php include 'header.php';
include 'dbcon.php'; ?>

<div class="app-body">

<main class="main">
<div class="container-fluid">
<div class="animated fadeIn">    
      
<?php 
$sel=mysqli_query($con,"SELECT * FROM customerappointment WHERE status='1'");
$row=mysqli_num_rows($sel);


$select=mysqli_query($con,"SELECT * FROM appointment WHERE status='1'");
$row2=mysqli_num_rows($select);




 ?>             
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                     <h2>Appointment Management</h2>
                   <a href="addAppointment.php" class="btn btn-danger btn-sm fa fa-plus">Add</a></div>
                  <div class="card-body">
                      <div class="col">
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active fa fa-hourglass-2" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending Appointments
                           <span class="btn btn-sm"><?php echo $row; ?></span></a> 
                       
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link fa fa-hourglass-2" id="contact-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="contact" aria-selected="false">Proccessing Appointments
                          <span class="btn btn-sm"><?php echo $row2; ?></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fa fa-check" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Done Appointments
                          <span class="btn btn-sm"><?php  ?></span></a>
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
                    
                    <th>Customer Code</th>
                    <th>Customer Name</th>
                    <th>Description</th>
                    <th></th>
                    
                   
                  </tr>
                </thead>
                <tbody>
                 <?php 

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
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       <table  id ="myTable2"class="table table-responsive-sm table-striped">
                   <thead class="table-dark">
                     <tr  >
                    <th>Appointment Code</th>
                    
                    <th>Customer Name</th>
                    <th>Customer Code</th>
                    <th>Description</th>
                    <th>Spare Parts </th>
                    <th>Ref</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
  
$select=mysqli_query($con,"SELECT * FROM appointment WHERE status='1'");
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
                    <td><a href="sppRe.php?id=<?php echo $appocode; ?>" class="btn btn-success btn-sm fa fa-paper-plane">Request</a></td>
                    <td><?php echo $empnm ;?></td>
                    <td><a href="jobcharges.php?id=<?php echo $appocode; ?>" class="btn btn-dark btn-sm fa fa-check-square-o"></a></td>
                    <td><a href="AppointmentView.php?id=<?php echo $appocode; ?>" class="btn btn-danger btn-sm fa fa-eye"></a></td>
                    <td><a href="jobcard.php?id=<?php echo $appocode; ?>" class="btn btn-danger btn-sm fa fa-print"></a></td>
                  </tr>

  <?php } ?>
                </tbody>
                 </table>
                      </div>
                      <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <table  id ="myTable3"class="table table-responsive-sm table-striped">
                    <thead class="table-dark">
                  <tr  >
                    <th>Appointment Code</th>
                    <th>Appointment Date</th>
                    <th>Requested Date</th>
                    <th>Customer Name</th>
                    <th>Customer Code</th>
                    <th>Rep Name</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                  </tr>
                </tbody>
                 </table>
                </div> -->

                  <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <table  id ="myTable3"class="table table-responsive-sm table-striped">
                    <thead class="table-dark">
                  <tr  >
                    <th>Appointment Code</th>
                    <th>Appointment Date</th>
                    <th>Requested Date</th>
                    <th>Customer Name</th>
                    <th>Customer Code</th>
                    <th>Rep Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-pill btn-block btn-success" type="button">Success</button>
                  </div></td>
                  <td></td>
                  </tr>
                </tbody>
                 </table>
                </div> -->
                 <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="profile-tab">
                        <table  id ="myTable3"class="table table-responsive-sm table-striped">
                   <thead class="table-dark">
                     <tr  >
                    <th>Appoi Code</th>
                    
                    <th>Customer Code</th>
                    <th>Vehicle No</th>
                    <th>Request Id </th>
                    
                    <th>Ref</th>
                    <th>Action</th>
                    <th>Proccessed Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  
                    
                    <td><a href="AppointmentDetails.php?id=<?php echo $regid; ?>" class="btn btn-danger btn-sm fa fa-eye">View</a></td>
                    <td></td>
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
        include 'footer.php';
        include 'scripts.php'; ?>
  <script>
        $(document).ready( function () {
    $('#myTable1').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
    } );
  </script>
          </body>
</html>