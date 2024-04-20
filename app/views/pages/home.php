<?php require APPROOT . '/views/inc/header.php'; ?>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../public/images/carousel-1.jpg" class="d-block w-100" alt="..." height="500px">
      </div>
      <div class="carousel-item">
        <img src="../public/images/carousel-2.jpg" class="d-block w-100" alt="..." height="500px">
      </div>
      <div class="carousel-item">
        <img src="../public/images/carousel-3.jpg" class="d-block w-100" alt="..." height="500px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
      
  <!-- Cocacola Row 1 -->
  <section id="projects" class="projects py-4">
    <div class="container">
      <h2 class="text-center pb-4 mb-0">
        Coca-Cola <span class="text-danger">Products</span>
      </h2>
      <div class="row">
        <div class="col-md-4 pb-4">
          <div class="card rounded-2 p-2">
            <img src="../public/images/3.jpg" alt="" height="240px" style="border-top-right-radius: 0.3rem; border-top-left-radius: 0.3rem;"/>
            <div class="card-body">
              <h5 class="card-title">Refreshing CocaCola</h5>
              <p class="card-text">
                <span class="text-primary fw-bold">Coca-Cola</span> is a globally popular carbonated soft drink known for its signature cola flavor, 
                cherished for over a century. Its refreshing taste and iconic red branding have made it 
                a classic beverage choice worldwide.
              </p>
            </div>
            <div class="card-footer d-flex border-0 bg-transparent pt-0">
              <a href="<?php echo URLROOT; ?>/model/cocacola" class="btn btn-outline-primary py-2 px-4 ms-auto">Find out more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-4">
          <div class="card rounded-2 p-2">
            <img src="../public/images/1.jpg" alt="" height="240px" style="border-top-right-radius: 0.3rem; border-top-left-radius: 0.3rem;"/>
            <div class="card-body">
              <h5 class="card-title">Colorful Fanta</h5>
              <p class="card-text">
                <span class="text-primary fw-bold">Fanta</span> is a vibrant and fruity soda brand offering a wide range of flavors that appeal to
                 consumers of all ages. With its playful marketing and diverse fruity taste options, 
                 Fanta brings a fun and colorful twist to the soda market.
              </p>
            </div>
            <div class="card-footer d-flex border-0 bg-transparent pt-0">
              <a href="<?php echo URLROOT; ?>/model/fanta" class="btn btn-outline-primary py-2 px-4 ms-auto">Find out more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-4">
          <div class="card rounded-2 p-2">
            <img src="../public/images/2.jpg" alt="" height="240px" style="border-top-right-radius: 0.3rem; border-top-left-radius: 0.3rem;"/>
            <div class="card-body">
              <h5 class="card-title">Iconic Pepsi</h5>
              <p class="card-text">
                <span class="text-primary fw-bold">Pepsi</span> is a carbonated soft drink known for its refreshing, sweet taste and iconic red, white, and blue branding. With a legacy spanning over a century, Pepsi continues to be a popular choice worldwide.
              </p>
            </div>
            <div class="card-footer d-flex border-0 bg-transparent pt-0">
              <a href="<?php echo URLROOT; ?>/model/pepsi" class="btn btn-outline-primary py-2 px-4 ms-auto">Find out more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>