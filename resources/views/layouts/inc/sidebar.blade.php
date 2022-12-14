<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-success p-2"  id="sidenav-main" style="--bs-bg-opacity: .5;">
<div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" #" target="_blank">
        
        <span class="ms-1 font-weight-bold text-white">Min Ecommerce  Shop</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href={{url('categories')}}>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons ">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('create')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Add Category</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('create-product')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Add A Product</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('users')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">people</i>
            </div>
            <span class="nav-link-text ms-1">users</span>
          </a>
        </li>
        
       
        <li class="nav-item">
        <a class="dropdown-item nav-link text-white btn-primary justify-content-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}</a></li>
                    <div class="text-white text-center me-2 d-flex align-items-left justify-content-left">
              <i class="material-icons opacity-10"></i>
            </div>
                    <li><hr class="dropdown-divider"></li>
                                
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                    </form>
        </li>
      </ul>
    </div>
    
</aside>
 