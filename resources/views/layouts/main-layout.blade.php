@include('layouts.head')
  <body class='main-body'>
    <header class='main-header'>
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
    </header>
@yield('content')

@include('layouts.footer')