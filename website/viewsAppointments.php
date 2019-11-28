<?php include 'webheader.php'; 
include '../system/dbcon.php';?>

<div class="app-body">

<main class="main">
<div class="container-fluid">
<div class="animated fadeIn">          
            <h2>My Appointments</h2>
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                 
                  
                  <div class="card-body">
                      <div class="col">
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending Appointments</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cancelled Appointments</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Proccessing Appointment</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Done Appointments</a>
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
$select=mysqli_query($con,"SELECT * FROM customerappointment WHERE CustomerName='$utype' AND status='1' AND AppoStatus='1'");

while($row=mysqli_fetch_array($select)){
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
                    <th>Appointment Date</th>
                    
                    <th>Customer Code</th>
                    <th>Customer Name</th>
                    <th>Description</th>
                    <th></th>
                    
                   
                  </tr>
                </thead>
                <tbody>
                 <?php 
$select=mysqli_query($con,"SELECT * FROM customerappointment WHERE CustomerName='$utype' AND status='0' ");

while($row=mysqli_fetch_array($select)){
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
                    
                    <td><a href="CancelMsg.php?id=<?php echo $appocode; ?>" class="btn btn-danger btn-sm fa fa-eye">Message</a></td>
                  </tr>

  <?php } ?>
                </tbody>
                 </table>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <table  id ="myTable3"class="table table-responsive-sm table-striped">
                    <thead class="table-dark">
                  <tr  >
                    <th>Appointment Code</th>
                    <th>Appointment Date</th>
                    
                    <th>Customer Code</th>
                    <th>Customer Name</th>
                    <th>Description</th>
                    <th>Ref</th>
                    <th></th>
                    
                   
                  </tr>
                </thead>
                <tbody>
                 <?php 

 $sel=mysqli_query($con,"SELECT c.AppointmentCode FROM cusapp_approve c, customerappointment cu WHERE c.CupAppoCode=cu.AppointmentCode");

$select=mysqli_query($con,"SELECT * FROM appointment WHERE  AppointmentCode='$sel' AND JobStatus='1'");

while($row=mysqli_fetch_array($select)){
  $appocode=$row['AppointmentCode'];
  $cusnm=$row['FirstName'];
  $appodate=$row['AppointmentDate'];
  $cuscode=$row['CustomerCode'];
  $other=$row['Other'];
  $empcode=$row['EmployeeCode'];
  $select1=mysqli_query($con,"SELECT * FROM user WHERE Username='$empcode'");
  while($row=mysqli_fetch_array($select1)){
    $ref=$row['FullName'];
  }

  
  

  
  ?>

                  <tr>
                    <td><?php echo $appocode ;?></td>
                    
                    <td><?php echo $appodate ;?></td>
                    <td><?php echo $cusnm ;?></td>
                    <td><?php echo $cuscode ;?></td>
                    <td><?php echo $other ;?></td>
                    <td><?php echo $ref ;?></td>
                    
                    <td><a href="CustomerAppointmentViewPr.php?id=<?php echo $appocode; ?>" class="btn btn-danger btn-sm fa fa-eye">View</a></td>
                  </tr>

  <?php } ?>
                </tbody>
                 </table>
                </div>

                  <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
                          <table  id ="myTable4"class="table table-responsive-sm table-striped">
                    <thead class="table-dark">
                  <tr  >
                    <th>Requested Date</th>
                    <th>Appointment Date</th>
                    <th>Appointment Code</th>
                    <th>Customer Name</th>
                    <th>Vehicle Type</th>
                    <th>Vehicle No</th>
                    <th>Vehicle Brand</th>
                    
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

 ?>
        <?php include 'webfooter.php'; 
       include'../system/scripts.php';?>
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