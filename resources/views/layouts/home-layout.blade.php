<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My shop</title>
  </head>
  <body>
      <header>
          <div class="container">
              <div class="row">
                  <div class='col-md-6 col-6'>
                      <div class='logo-container'>
                          <div class="logo-image">
                              <h2>SMART SHOP</h2>
                          </div>
                      </div>
                  </div>
                  <div class='col-md-6 col-6 text-right'>
                      <div class="tag-location">
                          <div class='top-bar-location-content'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                              Butwal,Nepal
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="jumbtron-section">
              <div class="container text-center">
                  <div class='upper-text'>
                      <h3>#One of the best Medium<h3>
                  </div>
                  <div class='middle-text'>
                    <p>You can buy and sell product with best match with best price rates.</p>
                  </div>
                  <div class="form-section">
                    <form class="" id='search-form' action='pp.html' method='get'>
                        <div class="input-group">
                            <div class="custom-file">
                              <input type="text" class="form-control" name='item' required>
                              <!--<label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>-->
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                            </div>
                            
                            
                        </div>
                    </form>
                  </div>

              </div>
          </div>
      </header>
      @yield('content');
      <footer>
          <div class='container'>
              <div class='row'>
                  <div class="col-md-3">
                      <div class='footer-logo'>
                          <h5>SMART SHOP</h5>
                      </div>
                      <div class='company-motto'>
                          The company is providing service to the customer since 1953.one of the best ecommerce marketing site and product service of a name and product electronics and delivery service.
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class='social-section-title'>
                          <h5>Contact Information</h5>
                      </div>
                      <div class='social-section'>
                          <ul class='social-list'>
                              <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                  Butwal Nepal
                              </li>
                              <li>
                                <i class="fa fa-phone"></i>
                                  9844700852
                              </li>
                              <li>
                                <i class="fa fa-phone"></i>
                                  9819433236
                              </li>
                              <li>
                                <i class="fa fa-envelope"></i>
                                  pandeyvivak25@gmail.com</li>
                              
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class='our-branch'>
                        <h5>Our Branch</h5>
                        <ul class='social-list branch'>
                            <li>
                              
                                Butwal 11, Nepal
                            </li>
                            <li>
                                
                                kathmandu 20, Nepal
                            </li>
                            <li>
                               
                                Chitwan Bharatpur 20, Nepal
                            </li>
                            <li>
                                
                                Illam 10, Nepal
                            </li>
                            
                        </ul>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class='our-branch'>
                        <h5>Menu</h5>
                        <ul class='social-list branch'>
                            <li>
                              
                                Home
                            </li>
                            <li>
                                
                                Contact
                            </li>
                            <li>
                               
                                Blog
                            </li>
                            <li>
                                
                                Shop
                            </li>
                            
                        </ul>
                    </div>
                  </div>
              </div>
          </div>
      </footer>
     <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src='assets/js/custom.js'></script>
    <script>
        $(".product-card").flip();
    </script>
</body>
</html>