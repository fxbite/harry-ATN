<?php
  require "header.php";
?>
      <!-- SLIDER -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <!--End of slider-->
      <!--Service Section==========-->
      <section class="services py-5 text-center">
          <div class="container">
              <div class="row">
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                      <span class="service-icon">
                          <i class="fas fa-globe fa-2x"></i>                            
                      </span>
             <h5 class="font-weight-bold text-uppercase">Worldwide Shipping</h5>
             <p class="text-capitalize">Lorem ipsum dolor sit amet consectetur 
                 adipisicing elit. Ducimus, dicta!</p>
                  </div>
                  <!--end of Service=-->
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-stamp fa-2x"></i>                            
                    </span>
           <h5 class="font-weight-bold text-uppercase">Certified by Gurus</h5>
           <p class="text-capitalize">Lorem ipsum dolor sit amet consectetur 
               adipisicing elit. Ducimus, dicta!</p>
                </div>
                <!--end of Service=-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-file-invoice-dollar fa-2x"></i>                            
                    </span>
           <h5 class="font-weight-bold text-uppercase">30 Days Money Back</h5>
           <p class="text-capitalize">Lorem ipsum dolor sit amet consectetur 
               adipisicing elit. Ducimus, dicta!</p>
                </div>
                <!--end of Service=-->
              </div>
          </div>
      </section>
      <!---End of Service Section=======-->
  <!---About Section=====-->
  <section id="about-sec">
     <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 text-center">
          <img src="assets/images/logo.png" width="450" height="250"
          class="img-fluid watch-img">
        </div>
        <div class="col-lg-7 text-lg-right  text-center text-color about-text">
          <h1 >About Company</h1>
          <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Perferendis itaque sequi facere deleniti 
            repellat minima doloribus nostrum consectetur enim 
            accusantium.</p>
        </div>
      </div>
      </div>
      </section>
      <!---End of About Section---->
      <!--Best Seller Products-->
      <section id="products" class="seller py-5">
        <div class="container">
          <!--Section title-->
          <div class="row mb-5">
            <div class="col d-flex flex-wrap text-uppercase justify-content-center">
              <h1 class="font-weight-bold align-self-center mx-1">
                Best Seller Products
              </h1>
            </div>
          </div>
          <!---End of Title-->
        <?php     
        require_once 'connectDB.php';
        $con = ConnectDB();
        $query = "SELECT * FROM products ORDER BY 'pdID' ASC ";
        $result = pg_query($con, $query);                                    
        while($row = pg_fetch_assoc($result)){
        $moredetail ="product-page.php?id=".$row['pdID']; ?>
            <div class="row">
           <div class="col-sm-6 ">
              <div class="seller-item">
                <img src="<?php echo $row['pdImage']; ?>" alt="" class="img-fluid photo">
                <p><?php echo $row['pdName']; ?></p>
               </div>
            </div>
            <!--End of first column-->
            <div class="col-sm-6 d-flex flex-column justify-content-between">
              <div class="row">
                <!--first item-->
                <div class="col-sm-6">
                  <div class="seller-item"><a href="<?php echo $moredetail; ?>"></a>
                    <img src="<?php echo $row['pdImage']; ?>" alt="" class="img-fluid seller-img">
                    
                    <p><?php echo $row['pdName']; ?></p>
                  </div>
                </div>
                <!--End of 1st item-->
                 <!--first item-->
                 <div class="col-sm-6">
                  <div class="seller-item"><a href="<?php echo $moredetail; ?>"></a>
                    <img src="<?php echo $row['pdImage']; ?>" alt="" class="img-fluid seller-img">
                    
                    <p><?php echo $row['pdName']; ?></p>
                  </div>
                </div>
                <!--End of 1st item-->       
              </div>
              <!--end of row-->
              <div class="row">
                <!--first item-->
                <div class="col-sm-6">
                  <div class="seller-item"><a href="<?php echo $moredetail; ?>"></a>
                    <img src="<?php echo $row['pdImage']; ?>" alt="" class="img-fluid seller-img
                    img-top">
                    
                    <p><?php echo $row['pdName']; ?></p>
                  </div>
                </div>
                <!--End of 1st item-->
                 <!--first item-->
                 <div class="col-sm-6">
                  <div class="seller-item"><a href="<?php echo $moredetail; ?>"></a>
                    <img src="<?php echo $row['pdImage']; ?>" alt="" class="img-fluid seller-img
                    img-top">
                    
                    <p><?php echo $row['pdName']; ?></p>
                  </div>
                </div>
                <!--End of 1st item-->       
              </div>
            </div>
          </div>
         </div> 
    </section>
      <!---End of Best Seller-->
      <?php }  echo "Con cá"; ?>
      <!--Contact us Section-->
       <!--Contact US-->
    <section id="contract" class="contact py-5">
      <div class="container">
          <h2 class="section-heading">Contact Us</h2>
          <form class="col-lg-6 offset-lg-3">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter name">
              </div>
              <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" placeholder="Type your message" row="5">
                  
              </textarea>
              </div>
              <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="check">
                  <label class="form-check-label" for="check">Subscribe to newsletter</label>
              </div>
              <div class="text-center">
                  <button type="button" class="btn btn-lg btn-color cont-btn popup" onclick="popupFunction()">Submit<span class="popuptext" id="myPopup">Your contraction will be respone in at least 1 day. Please take a seat and wait for our respone. Thank you!</span></button>
              </div>
          </form>
      </div>
  </section>
  <!--End of Contact Section-->
<?php
  require "footer.php"
?>