@include('layouts.head')
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
      @yield('content')
      @include('layouts.footer')
    