<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="index.html">
                <svg id="icon-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box link-icon">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-toggle="collapse" href="#general" aria-expanded="false" aria-controls="general">
              <svg id="icon-home-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard link-icon">
                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" style="stroke-dasharray: 57, 77; stroke-dashoffset: 0;"></path>
                  <path width="8" height="4" d="M8 2 L16 2 L16 6 L8 6 Z" style="stroke-dasharray: 24, 44; stroke-dashoffset: 0;"></path>
              </svg>
              <span class="menu-title">Product</span>
              <i class="ti-angle-right"></i>
          </a>
          <div class="collapse" id="general" style="">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{route('add-product')}}">Add Product</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('view-product')}}">List Product</a></li>
              </ul>
          </div>
        </li> 
    </ul>
</nav>