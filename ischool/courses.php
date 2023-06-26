<!-- Start Including Header-->
<?php
    include("./mainInclude/header.php");
?>
<!-- End Including Header-->

<!-- Start Course Page Banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses"
        style="height: 500px; width: 100%; object-fit:cover;box-shadow: 10px;"/>
    </div>
</div>
<!-- End Course Page Banner-->


<!--  Start All Popular Course-->

<div class="container mt-5">
    <h1 class="text-center">All Course</h1>
    <!-- Start Most Popular Course 1st Deck -->
    <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <image src="image/java.png" class="card-img-small" alt="Guiter" />
                <div class="card-body">
                    <h5 class="card-title">Learn Java</h5>
                    <p class="class-text"> Java is a widely used object-oriented programming language and software platform.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#2547 2000 </del></small> <span class="font-weight-bolder">&#2547 200</span></p>
                    <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php">Enroll</a>
                </div>
            </div>
        </a>
        <!-- End All Popular Course 1st Deck -->

        <!-- Start All Popular Course 2nd Deck -->
        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <image src="image/java.png" class="card-img-small" alt="Guiter" />
                <div class="card-body">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="class-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#2547 2000 </del></small> <span class="font-weight-bolder">&#2547 200</span></p>
                    <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </a>
    </div>
    <!-- End All Popular Course 2nd Deck -->

    <!-- Start All Popular Course 3rd Deck -->
    <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding:0px;">
            <div class="card">
                <img src="image/python.png" class="card-img-small" alt="Python" />
                <div class="card-body">
                    <h5 class="card-title">Learn Python</h5>
                    <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, error.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#2547 3000 </del></small> <span class="font-weight-bolder">&#2547 300</span></p> 
                    <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </a>
    </div>
    <!-- End All Popular Course 3rd Deck -->
    <!-- End All Popular  -->




<!-- Start Including Footer-->
<?php
    include("./mainInclude/footer.php");
?>
  <!-- End Including Footer-->