<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl
 my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="{{asset('dashboard')}}/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Maher Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('dashboard/index') ? 'active bg-gradient-primary' : ''}}" href="{{url('dashboard/index')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('category') ? 'active bg-gradient-primary' : ''}} " href="{{url('category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-category') ? 'active bg-gradient-primary' : ''}}">
          <a class="nav-link text-white " href="{{url('add-category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Add-Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('products') ? 'active bg-gradient-primary' : ''}} "
           href="{{url('products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-products') ? 'active bg-gradient-primary' : ''}}">
          <a class="nav-link text-white " href="{{url('add-products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Add-Prodacts</span>
          </a>
        </li>
        <li class="nav-item {{Request::is('orders') ? 'active bg-gradient-primary' : ''}}">
          <a class="nav-link text-white " href="{{url('orders')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">content_paste</i>
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        <li class="nav-item {{Request::is('users') ? 'active bg-gradient-primary' : ''}}">
          <a class="nav-link text-white " href="{{url('users')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">persons</i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
      </ul>
    </div>

  </aside>
