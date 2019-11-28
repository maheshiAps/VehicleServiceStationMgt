
<?php include 'webheader.php'; ?>

		<div class="app-body">
		<main class="main">
		<div class="container-fluid">
          <div class="animated fadeIn">
           <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-success">
                  <div class="card-body pb-0">
                    
                    <div class="text-value"></div>
                    <div>Payment Details</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <a href="ViewsPayments.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-dark">
                  <div class="card-body pb-0">
                   
                    <div class="text-value"></div>
                    <div>Appointment Details</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <a href="ViewsAppointments.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                  
                    <div class="text-value"></div>
                    <div>Add Appointment </div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <a href="CustomerAppointmentAdd.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
             <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  <div class="card-body pb-0">
                    
                    <div class="text-value"></div>
                    <div>Index Page
                    </div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <a href="dashboard.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    <canvas class="chart" id="card-chart4" height="70"></canvas>

                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
			</div>
		</div>
	</main>
</div>






<?php include 'webfooter.php'; ?>

