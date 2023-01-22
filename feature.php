<!DOCTYPE html>
<html lang="en">
<?php
require_once('header.php');
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-3 text-white animated slideInRight">Features</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb animated slideInRight mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Features</li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Features Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="position-relative me-lg-4">
          <img class="img-fluid w-100" src="img/CONSTRUCCIONES/29.jpg" alt="" />
          <span class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block" style="width: 120px; height: 120px"></span>
          <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
            <span></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <p class="fw-medium text-uppercase text-primary mb-2">
          Why Choosing Us!
        </p>
        <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
        <p class="mb-4">
          We are a competitive company, which has a high demand in the
          management of constructions and multiple services, our work is
          guaranteed.
        </p>
        <div class="row gy-4">
          <div class="col-12">
            <div class="d-flex">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Experienced Workers</h4>
                <span>We have highly trained workers, who work under the
                  professionalism based on civil engineering.</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="d-flex">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Reliable Industrial Services</h4>
                <span>Our services guaranteed with the best of the best.</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="d-flex">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>24/7 Customer Support</h4>
                <span>Works under customer demand.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Features End -->

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Our work</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- 16:9 aspect ratio -->
        <div class="ratio ratio-16x9">
          <video controls>
            <source src="img/CONSTRUCCIONES/VIDEO.mp4" type="video/mp4" />
            <!-- <source src="img/CONSTRUCCIONES/VIDEO.ogg" type="video/ogg" />  -->
            Your browser does not support the video tag.
          </video>
          <!-- <iframe
                class="embed-responsive-item"
                src="img/CONSTRUCCIONES/VIDEO.mp4"
                id="video"
                allowfullscreen
                allowscriptaccess="always"
                allow="autoplay"
              ></iframe> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal End -->

<?php
require_once('footer.php');
?>