

<?php  
include 'webheader.php';
include '../system/dbcon.php';
?>


<div class="app-body">
<main class="main">
<div class="container-fluid">
<div class="animated fadeIn">
         <form action="" method="post">        
          
             <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                      <h2>Appointment Management</h2>
                    <a href="ViewsAppointments.php" class="btn btn-danger btn-sm fa fa-eye">Views</a>
                     
                  </div>





                  <div class="card-body">
                    <form class="form-horizontal" method="post" action="">
                      <h4>CUSTOMER DETAILS :-</h4>
                      <div class="form-group row">
                        <div class="col-4">
                          <lable>Customer Name :
                          <input type="text" class="form-control" name="cusnm" id="cusnm" value="<?php echo $user ;?>" readonly>
                         
                        </div>
                        <div class="col-4">

                          <lable>Customer Code :
                          <input class="form-control" type="text" placeholder="" name="cuscode" id="cuscode" value="<?php echo $utype ;?>" readonly >
                         
                        </div>
                       
                      </div>

            <h4>VEHICLE DETAILS :-</h4>
                      
                        <div class="form-group row">
<?php 
  
$eid=$_GET['id'];
$select1=mysqli_query($con,"SELECT * FROM customerappointment WHERE AppointmentCode='$eid' AND status='1'");
while($row=mysqli_fetch_array($select1)){
  $cussnm=$row['CustomerName'];
  $cusscode=$row['CustomerCode'];
  $appoocode=$row['AppointmentCode'];
  $appoodate=$row['AppointmentDate'];
  $vehhno=$row['VehNo'];
  $vehhtype=$row['VehType'];
  $find=mysqli_query($con,"SELECT * FROM vehcletype WHERE Id='$vehhtype'");
  while($rw=mysqli_fetch_array($find)){
    $vehtypenm=$rw['VehicleName'];
  }
  $vehhmodel=$row['VehModel'];
  $vehhbrand=$row['VehBrand'];

 

}
 ?> 
                        <div class="col-4">
                          <lable>Appointment Code :
                          <input class="form-control" type="text" placeholder="" name="appocode" readonly value="<?php echo $appoocode; ?>" required >
                         
                        </div>
                        
                        <div class="col-4">
                          <lable>Vehicle No :
                          <input class="form-control" type="text" placeholder="" value="<?php echo $vehhno; ?>" name="vehno" readonly required >
                         
                        </div>
                        
                        <div class="col-4">
                          <lable>Vehicle Type :
                          <input type="text" class="form-control" id="vehtype" name="vehtype"  value="<?php echo $vehtypenm; ?>" readonly>
                           
                         
                        </div>
                         <div class="col-4">
                          <lable>Vehicle Brand :
                          <input type="text " class="form-control" id="vehbrand" name="vehbrand" size="" value="<?php echo $vehhbrand; ?>" readonly>
                           
                         
                        </div>
                        <div class="col-4">
                          <lable>Vehicle Model :
                          <input class="form-control" type="text" placeholder="" name="vehmodel" value="<?php echo $vehhmodel; ?>"required readonly>
                         
                        </div>
                        <div class="col-12">
                         
                        <h3>Sections: </h3>
                        <div class="col-form-label">
                          <div class="form-check form-check-inline mr-1 col-3">
                            <input class="form-check-input" id="sec1" name="sec1" type="checkbox" value="6">
                            <label class="form-check-label" for="inline-checkbox1">Engine Turn Up</label>
                            <input type="text" class="form-control" id="s1" name="s1"readonly>
                          </div>
                          <div class="form-check form-check-inline mr-1 col-3">
                            <input class="form-check-input" id="sec2" name="sec2"  type="checkbox" value="5">
                            <label class="form-check-label" for="inline-checkbox2">Vehicle Scanning</label>
                            <input type="text" class="form-control" id="s2" name="s2"readonly>
                          </div>
                          <div class="form-check form-check-inline mr-1 col-3">
                            <input class="form-check-input" id="sec3" name="sec3"  type="checkbox" value="3">
                            <label class="form-check-label" for="inline-checkbox3">Hybrid Repair</label>
                            <input type="text" class="form-control" id="s3" name="s3"readonly>
                          </div>
                           <div class="form-check form-check-inline mr-1 col-3">
                            <input class="form-check-input" id="sec4" name="sec4"  type="checkbox" value="4">
                            <label class="form-check-label" for="inline-checkbox3">Running Repair</label>
                            <input type="text" class="form-control" id="s4" name="s4"readonly>
                          </div>
                           <div class="form-check form-check-inline mr-1 col-3">
                            <input class="form-check-input" id="sec5" name="sec5"  type="checkbox" value="1">
                            <label class="form-check-label" for="inline-checkbox3">Engine Repair</label>
                            <input type="text" class="form-control" id="s5" name="s5"readonly>
                          </div>
                           <div class="form-check form-check-inline mr-1 col-3">
                            <input class="form-check-input" id="sec6" name="sec6"  type="checkbox" value="2">
                            <label class="form-check-label" for="inline-checkbox3">Auto Gear Bar Repair </label>
                            <input type="text" class="form-control" id="s6" name="s6"readonly>
                          </div>
                      </br>
                          <div class="col-9">
                            <h4>Other </h4>
                            <input class="col-9 form-control" id="sec7" name="sec7"  type="text" value="">
                            
                          </div>
                        
                      </div>
                         
                        </div>
                       <div class="col-4">
                       <label for="appointment">Appointment Date</label>
                       <input type="text" class="form-control" id="appointment" name="appointment" placeholder="Appointment Date">
                         </div>
                      </div>

                      <div class="form-actions">
                        
                        <button class="btn btn-warning" name="submit" type="submit">Submit</button>
                        <button class="btn btn-danger"  name="cancel" type="reset">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>



</div>
</div>
</main>
</div>                  
            
<?php 
      if(isset($_POST['submit'])){
        include('../system/dbcon.php');
               if(!empty($_POST['s1'])){
      $sec1='1';

    }else $sec1 ='0';
    if(!empty($_POST['s2'])){
      $sec2='1';


    }else $sec2 ='0';
        
        if(!empty($_POST['s3'])){
      $sec3='1';

    }else $sec3 ='0';

    if(!empty($_POST['s4'])){
      $sec4='1';

    }else $sec4 ='0';
    if(!empty($_POST['s5'])){
      $sec5='1';

    }else $sec5 ='0';
    if(!empty($_POST['s6'])){
      $sec6='1';

    }else $sec6 ='0';
        $option=$_POST['sec7'];
        
        $appodate=$_POST['appointment'];
      
        
        $update=mysqli_query($con,"UPDATE customerappointment SET AppointmentDate='$appodate',sec1='$sec1',sec2='$sec2',sec3='$sec6',sec4='$sec4',sec5='$sec5',sec6='$sec6',Other='$option' ");//database connection opened
      
      if(!$insert){
          echo 'Data Updation Failed'.mysqli_error();
          
        }
      mysqli_close($con);//database connection closed but automatically closed by mysqli  
      }
     ?> 

 </form>  

<?php
include 'webfooter.php';
include '../system/scripts.php';


?>
<script src="../assets/js/zebra_datepicker.min.js"></script>
<script>
    $(document).ready(function(){
      var config={
        source:"../system/findCus.php",
        select: function(event,ui){ //encode eken passewena value eka 
          $("#cusnm").val(ui.item.fname); //dispaly wennneh load kranna fname eka
          $("#cuscode").val(ui.item.id1);
          
        },
        minLength:1//recode ekai


      };
      $("#cusnm").autocomplete(config);//autocomplte wenna
    });
    $('#appointment').Zebra_DatePicker({

      direction:[1,7],
      // /disable_dates: ['*,*,*,0,6']
    });
  </script>
<script>
$(document).ready(function(){
// $('#cusname').change(function(){
//         var utype1=$(this).val(); 
//         var postid='id='+utype1;//$(#utype).val()
//         $.ajax({
//           type:"POST",
//           url:"selectEmpSec.php",//path.filename
//           data:postid,//assign utype into id-id:ut2, id2:ut3
//           cache:false,
//           success:function(rdata){ //return data
//             $('#cuscode').val(rdata);
//           }
//         });
//       });
      // $('#vehtype').change(function(){
      //   var utype=$(this).val(); 
      //   var postid='id='+utype;//$(#utype).val()
      //   $.ajax({
      //     type:"POST",
      //     url:"../system/selectVehBr.php",//path.filename
      //     data:postid,//assign utype into id-id:ut2, id2:ut3
      //     cache:false,
      //     success:function(rdata){ //return data
      //       $('#vehbrand').html(rdata);
      //     }
      //   });
        $('#sec1').click(function(){
      if($(this).is(":checked")){
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s1').val(r);//text value ekaka display & ganna val()
          
        }
      });
      }
      else if($(this).is(":not(:checked)")){
        
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s1').val(null);
        }
      });
        

      }
      
     });
          $('#sec2').click(function(){
      if($(this).is(":checked")){
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s2').val(r);//text value ekaka display & ganna val()
          
        }
      });
      }
      else if($(this).is(":not(:checked)")){
        
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s2').val(null);
        }
      });
        

      }
      
     });
            $('#sec3').click(function(){
      if($(this).is(":checked")){
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s3').val(r);//text value ekaka display & ganna val()
          
        }
      });
      }
      else if($(this).is(":not(:checked)")){
        
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s3').val(null);
        }
      });
        

      }
      
     });
              $('#sec4').click(function(){
      if($(this).is(":checked")){
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s4').val(r);//text value ekaka display & ganna val()
          
        }
      });
      }
      else if($(this).is(":not(:checked)")){
        
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s4').val(null);
        }
      });
        

      }
      
     });
                $('#sec5').click(function(){
      if($(this).is(":checked")){
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s5').val(r);//text value ekaka display & ganna val()
          
        }
      });
      }
      else if($(this).is(":not(:checked)")){
        
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s5').val(null);
        }
      });
        

      }
      
     });
                  $('#sec6').click(function(){
      if($(this).is(":checked")){
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s6').val(r);//text value ekaka display & ganna val()
          
        }
      });
      }
      else if($(this).is(":not(:checked)")){
        
        var val1=$(this).val();
        var postval='value='+val1;
        $.ajax({
        type:'POST',
        url:'../system/displaySec.php',
        data:postval,
        cache:false,
        success:function(r){
          
          $('#s6').val(null);
        }
      });
        

      }
      
     });

      });


</script>

</body>
</html>