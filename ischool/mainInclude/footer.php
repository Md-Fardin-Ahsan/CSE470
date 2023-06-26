<!-- start Foorter -->
  <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2023 || Designed By DeCoder || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
  </footer>
  <!-- End Foorter -->



  <!-- Start Student Registration Form-->
  <!-- Button trigger modal -->
  <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">
  Launch demo modal
  </button>-->

  <!-- Modal -->
  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-------------form er code shuru----------->
          <form>
            <div class="form-group">
              <label for="stuname" class="pl-2 font-weight-bold">Name</label><input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
            </div>
            <div class="form-group">
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
            </div>
            <div class="form-group">
              <label for="stupass" class="pl-2 font-weight-bold">New Password</label><input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
            </div>
          </form>
          <!-------------form er code sesh------>
          <!-- End Student Registration Forn-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="addStu()" data-bs-dismiss="modal">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Student Registration Form with button-->


  <!-- Start Student Login Form-->
  <!-- Button trigger modal -->
  <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">
  Launch demo modal
  </button>-->

  <!-- Start Student Login Form-->
  <!-- Modal -->
  <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Student Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-------------Login er code shuru----------->
          <form id="stuLoginForm">
            <div class="form-group">
              <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
            </div>
            <div class="form-group">
              <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
            </div>
          </form>
          <!-------------Login er code sesh------>
          <!-- End Student Login Forn-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="stuLoginBtn">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Student Login Form with button-->



  <!-- Start Admin Login Form-->
  <!-- Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-------------Login er code shuru----------->
          <form id="adminLoginForm">
            <div class="form-group">
              <label for="adminLogemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
            </div>
            <div class="form-group">
              <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
            </div>
          </form>
          <!-------------Login er code sesh------>
          <!-- End Admin Login-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="adminLoginBtn">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Admin Login with button-->










  <!-- Jquery and Bootstrap Javascript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>

  <!-- Student Ajax Call JavaScript-->
  <script type="text/javascript" src="js/ajaxrequest.js"></script>



</body>
</html>
