<?php include 'webheader.php'; 
include '../system/dbcon.php';?>

<div class="app-body">

<main class="main">
<div class="container-fluid">
<div class="animated fadeIn">          
              <h2>My Payment Management</h2>
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
     <?php 
     $select=mysqli_query($con,"SELECT COUNT(a.AppointmentCode) as c1  FROM appointment a, appo_invoice i WHERE a.AppointmentCode=i.AppointmentCode  AND a.CustomerCode='$user' AND i.status='0'" );
     while($row=mysqli_fetch_array($select)){
      $c1=$row['c1'];
     }
   
     // $rows=mysqli_num_rows($select);

   

      $selec=mysqli_query($con,"SELECT COUNT(a.AppointmentCode)as c2 FROM appointment a, appo_invoice i WHERE a.AppointmentCode=i.AppointmentCode  AND a.CustomerCode='$user' AND i.status='1'" );
    while($row=mysqli_fetch_array($selec)){
      $c2=$row['c2'];
     }
     // $rowss=mysqli_num_rows($selec);





      ?>             
                  <div class="card-body">
                      <div class="col">
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active fa fa-hourglass-2" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending Payments<span class="badge badge-pill badge-danger"><?php echo  $c1; ?></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fa fa-check" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Completed Payements<span class="badge badge-pill badge-warning"><?php echo $c2; ?></span></a>
                      </li>
                      
                      
                    </ul>
                 </div>
                 <div class="tab-content" id="myTab1Content">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table  id ="myTable"class="table table-responsive-sm table-striped">




              <thead class="table-dark">
                  <tr  >
                    <th>Invoice</th>
                    <th>Customer</th>
                    <th>Appo No</th>
                    <th>Spp Cost</th>
                    <th>Charge</th>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Balance</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php 

 $select=mysqli_query($con,"SELECT * FROM appointment a, appo_invoice i WHERE a.AppointmentCode=i.AppointmentCode  AND a.CustomerCode='$user' AND i.status='0'" );
while($row=mysqli_fetch_array($select)){

  $inno=$row['Id'];
  $apcode=$row['AppointmentCode'];
   $ser=$row['ServiceCharge'];
  $spprice=$row['SppPrice'];
  $emp=$row['Emp'];
  $total=$row['Total'];
  $comdate=$row['ComDate'];

 
  ?>



 <tr>
                    <td><?php echo $inno ; ?></td>
                    <td><?php echo $utype ; ?></td>
                    <td><?php echo $apcode ; ?></td>
                    <td><?php echo $spprice ; ?></td>
                    <td><?php echo $ser ; ?></td>
                    <td><?php echo $total ; ?></td>
                    






  <?php
$select1=mysqli_query($con,"SELECT sum(Paid) as tot,InvoiceId FROM appo_payment WHERE InvoiceId='$inno' ");
while($row1=mysqli_fetch_array($select1)){
  $innopaid=$row1['InvoiceId'];
  $paid=$row1['tot'];
  $balance=(float)$total-$paid;
  ?>




                 
<?php if($inno==$innopaid && $paid<$balance){ ?>

                    <td><?php echo $paid; ?></td>
                     <td><?php echo $balance.'.00' ; ?></td>


<?php

}
else {
     if($inno==$innopaid && $paid==$total){
      ?>
                    <td><?php echo "complet"; ?></td>
                     <td><?php echo $balance.'.00' ; ?></td>
  <?php
     }
     else{
      ?>
                    <td><?php echo "notpaid"; ?></td>
                     <td><?php echo $balance.'.00' ; ?></td>           
      <?php
     } 

}


}

  ?>
                   
              

  <?php
}





 ?>
                  </tr>
                </tbody>
                 </table>

                      </div>
                       <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table  id ="myTable2"class="table table-responsive-sm table-striped">




              <thead class="table-dark">
                  <tr  >
                    <th>Invoice</th>
                    <th>Customer</th>
                    <th>Appo No</th>
                    <th>Spp Cost</th>
                    <th>Charge</th>
                    <th>Total</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php 



 $select=mysqli_query($con,"SELECT * FROM appointment a, appo_invoice i WHERE a.AppointmentCode=i.AppointmentCode  AND a.CustomerCode='$user' AND i.status='1'" );

while($row=mysqli_fetch_array($select)){

  $inno=$row['Id'];
  $apcode=$row['AppointmentCode'];
   $ser=$row['ServiceCharge'];
  $spprice=$row['SppPrice'];
  $emp=$row['Emp'];
  $total=$row['Total'];
  $comdate=$row['ComDate'];
$selec=mysqli_query($con,"SELECT * FROM appointment WHERE AppointmentCode='$apcode' ");
while($row=mysqli_fetch_array($selec)){
$cusnm=$row['FirstName'];

}

 


 
  ?>



 <tr>
                    <td><?php echo $inno ; ?></td>
                    <td><?php echo $cusnm ; ?></td>
                    <td><?php echo $apcode ; ?></td>
                    <td><?php echo $spprice ; ?></td>
                    <td><?php echo $ser ; ?></td>
                    <td><?php echo $total ; ?></td>
                     



                   
                
  <?php
}





 ?>
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
            </main>
          </div>


        <?php include 'webfooter.php'; 
        include '../system/scripts.php';?>

        <script>
   
        $(document).ready( function () {
    $('#myTable').DataTable();
    $('#myTable2').DataTable();
   
    } );
 

</script>
          </body>
</html>