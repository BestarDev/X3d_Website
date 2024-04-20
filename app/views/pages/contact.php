<?php require APPROOT . '/views/inc/header.php'; ?>
  <!-- Contact -->
  <section id="contact" class="contact my-6 position-relative">
    <img
      src="../public/images/decoration-star.svg"
      alt="Contact Us Image"
      class="decoration-star position-absolute"
    />

    <div class="container position-relative">
      <div class="row pt-5 pb-4">
        <div class="col-lg-6 d-none d-md-block">
          <div class="image-container">
            <img src="../public/images/contact.png" width="90%" alt="" class="img-fluid rounded-3" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-container">
            <h2>Contact Us For A Quote</h2>
            <form>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter name"
                />
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter email"
                />
              </div>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter phone"
                />
              </div>
              <div class="mb-3">
                <textarea
                  class="form-control"
                  placeholder="Enter message"
                  rows="4"
                ></textarea>
              </div>
              <div class="d-grid gap-2">
                <input
                  type="submit"
                  value="Send"
                  class="btn btn-primary btn-block"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>