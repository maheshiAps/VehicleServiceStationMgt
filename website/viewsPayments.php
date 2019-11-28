<?php include 'webheader.php'; ?>

<div class="app-body">

<main class="main">
<div class="container-fluid">
<div class="animated fadeIn">          
            <h2>My Payments</h2>
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  
                  <div class="card-body">
                      <div class="col">
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="viewsAppointments/#home" role="tab" aria-controls="home" aria-selected="true">Pending Payments</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="viewsAppointments/#profile" role="tab" aria-controls="profile" aria-selected="false">Completed Appointments </a>
                      </li>
                    </ul>
                 </div>
                 <div class="tab-content" id="myTab1Content">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <table  id ="myTable1"class="table table-responsive-sm table-striped">
              <thead class="table-dark">
                  <tr  >
                    <th>Invoice No</th>
                    <th>Appointment Id</th>
                    <th>Spare Parts Price</th>
                    <th>Service Charges</th>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Balance</th>
                    <th><a href="" class="btn btn-danger"></a></th>
                    
                    
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
                    <td></td>
                    
                  </tr>
                </tbody>
                 </table>
                      </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <table  id ="myTable2"class="table table-responsive-sm table-striped">
                   <thead class="table-dark">
                     <tr  >
                   <th>Invoice No</th>
                    <th>Appointment Id</th>
                    <th>Spare Parts Price</th>
                    <th>Service Charges</th>
                    <th>Total</th>
                    
                    <th>Balance</th>
                    <th><a href="" class="btn btn-danger"></a></th>
                    
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
        <?php include 'webfooter.php';
        include'../system/scripts.php';?>
         <script>
        $(document).ready( function () {
    $('#myTable1').DataTable();
    $('#myTable2').DataTable();
   
    } );
  </script>

      </body>
      </html>