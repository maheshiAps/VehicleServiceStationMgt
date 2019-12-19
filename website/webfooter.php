    <footer class="app-footer">
      <div>
        <a href="index.php">NilankaMotors</a>
       <span>Copyright &copy; 2019. Maheshi Apsara Kumari (BIT-UG)</span>
      </div>
      
    </footer>
    <!-- CoreUI and necessary plugins-->
   <script src="../assets/vendors/jquery/js/jquery.min.js"></script>
<script src="../assets/vendors/jquery/js/popper.min.js"></script>
<script src="../assets/vendors/jquery/js/bootstrap.min.js"></script>
<script src="../assets/vendors/jquery/js/pace.min.js"></script>
<script src="../assets/js/jquery.model.min.js"></script>
<script src="../assets/vendors/jquery/js/perfect-scrollbar.min.js"></script>
<script src="../assets/vendors/jquery/js/coreui.min.js"></script>
<script>
    $('#ui-view').ajaxLoad();
    $(document).ajaxComplete(function() {
      Pace.restart()
    });
  </script>