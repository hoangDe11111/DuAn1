  <!-- Topbar Start -->
  <style>
      .header-btn {
          width: 50px;
          height: 50px;
          display: inline-flex;
          justify-content: center;
          position: relative;
          margin-left: 20px;
          transition: 0.3s;
          background-color: white;
          border-radius: 50%;
          align-items: center;
      }

      .cart-number {
          position: absolute;
          top: -10px;
          right: -10px;
          width: 22px;
          height: 22px;
          display: flex;
          justify-content: center;
          align-items: center;
          border-radius: 50%;
          background: #e82e2e;
          font-size: 12px;
          border: 1px solid #bfbfbf;
          color: white;
      }

      .header-btn:hover {
          background: linear-gradient(145deg, #dcdcdc, #ffffff);
          box-shadow: 20px 20px 60px #cfcfd0, -20px -20px 60px #ffffff;
      }
      .img-user{
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }
  </style>
  <div class="d-flex py-3 px-xl-5">
      <div class="col-lg-3 d-none d-lg-block">
          <a href="" class="text-decoration-none">
              <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
          </a>
      </div>
      <div class="col-lg-6 col-6 text-left">
          <form action="">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Tìm kiếm">
                  <div class="input-group-append">
                      <span class="input-group-text bg-transparent text-primary">
                          <i class="fa fa-search"></i>
                      </span>
                  </div>
              </div>
          </form>
      </div>
      <div class="col-lg-3 col-6 text-right">
          <a href="./form.php" class="border header-btn">
         <i>
         <img src="../img/cat-1.jpg" class="img-user" alt="">
         </i>
          <!-- <i class="fas fa-user "></i> -->
          </a>
          <a href="" class=" border header-btn header-cart">
              <i class="fas fa-shopping-cart "></i>
              <span class="cart-number">3</span>
          </a>
      </div>
  </div>

  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid mb-5">
      <div class="row border-top px-xl-5">
          <div class="col-lg-3 d-none d-lg-block">
              <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                  <h6 class="m-0">Danh mục</h6>
                  <i class="fa fa-angle-down text-dark"></i>
              </a>
              <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                  <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown">Giày<i class="fa fa-angle-down float-right mt-1"></i></a>
                          <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                              <a href="" class="dropdown-item">Men's Dresses</a>
                              <a href="" class="dropdown-item">Women's Dresses</a>
                              <a href="" class="dropdown-item">Baby's Dresses</a>
                          </div>
                      </div>
                      <a href="" class="nav-item nav-link">Shirts</a>
                      <a href="" class="nav-item nav-link">Jeans</a>
                      <a href="" class="nav-item nav-link">Blazers</a>
                      <a href="" class="nav-item nav-link">Jackets</a>
                      <a href="" class="nav-item nav-link">Shoes</a>
                  </div>
              </nav>
          </div>
          <div class="col-lg-9">
              <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                  <a href="" class="text-decoration-none d-block d-lg-none">
                      <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                  </a>
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                      <div class="navbar-nav mr-auto py-0">
                          <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                          <a href="shop.php" class="nav-item nav-link">Sản phẩm</a>
                          <a href="detail.php" class="nav-item nav-link">Chi tiết sản phẩm</a>
                          <div class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Trang</a>
                              <div class="dropdown-menu rounded-0 m-0">
                                  <a href="cart.php" class="dropdown-item">Giỏ hàng</a>
                                  <a href="checkout.php" class="dropdown-item">Thanh toán</a>
                              </div>
                          </div>
                          <a href="contact.php" class="nav-item nav-link">Liên hệ</a>
                      </div>
                  </div>
              </nav>
              <div id="header-carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active" style="height: 410px;">
                          <img class="img-fluid" src="../content/images/banners/carousel-1.jpg" alt="Image">
                          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                              <div class="p-3" style="max-width: 700px;">
                                  <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                  <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                                  <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                              </div>
                          </div>
                      </div>
                      <div class="carousel-item" style="height: 410px;">
                          <img class="img-fluid" src="../content/images/banners/carousel-2.jpg" alt="Image">
                          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                              <div class="p-3" style="max-width: 700px;">
                                  <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                  <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                  <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                      <div class="btn btn-dark" style="width: 45px; height: 45px;">
                          <span class="carousel-control-prev-icon mb-n2"></span>
                      </div>
                  </a>
                  <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                      <div class="btn btn-dark" style="width: 45px; height: 45px;">
                          <span class="carousel-control-next-icon mb-n2"></span>
                      </div>
                  </a>
              </div>
          </div>
      </div>
  </div>
  <!-- Navbar End -->