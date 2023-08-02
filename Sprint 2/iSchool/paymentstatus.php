<!-- Start Including Header-->
<?php
    include("./mainInclude/header.php");
?>
<!-- End Including Header-->

<!-- Start Course Page Banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/banner.jpg" alt="courses"
        style="height: 500px; width: 100%; object-fit:cover;box-shadow: 10px;"/>
    </div>
</div>
<!-- End Course Page Banner-->

<!-- Start Main Content-->
<div class="container">
    <h2 class="text-center my-4">Payment Status </h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="col-sm-1 col-form-label mx-4">Order ID: </label>
            <div>
                <input type="text" class="form-control mx-4">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
</div>
<!-- End Main Content-->


<!--Start Contact Us-->
<div class='container'>
    <?php
    include("./contact.php");
    ?>

</div>
<!--End Contact Us-->


<!-- Start Including Footer-->
<?php
    include("./mainInclude/footer.php");
?>
  <!-- End Including Footer-->