@section('sideBar')
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="{{ route('dashboard') }}" target="_blank">
      <img src="/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">Hotel XYZ Dashboard</span>
    </a>
  </div>

  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{ route('dashboard') }}">
          <div class="icon fas fa-hotel icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <title>shop </title>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      @if ( Auth::user()->role == true)
      <li class="nav-item">
        <a class="nav-link  {{ (request()->is('users','users/edit')) ? 'active' : '' }}" href="{{ route('users') }}">
          <div class="icon fas fa-users icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <title>office</title>
            
          </div>
          <span class="nav-link-text ms-1">User Management</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('room','room/edit')) ? 'active' : '' }}" href="{{ route('room') }}">
          <div class="icon fas fa-key  icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center ">
            <title>room</title>
          </div>
          <span class="nav-link-text ms-1">Room</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('invoice','invoice/edit')) ? 'active' : '' }}" href="{{ route('invoice') }}">
          <div class="icon fas fa-credit-card  icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center ">
            <title>Invoice</title>
          </div>
          <span class="nav-link-text ms-1">Invoice</span>
        </a>
      </li>
      @endif

      @if ( Auth::user()->role == false)
      <li class="nav-item">
        <a class="nav-link  {{ (request()->is('payment')) ? 'active' : '' }}" href="{{ route('payment') }}">
          <div class="icon fas fa-credit-card icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center ">
            <title>credit-card</title>
          </div>
          <span class="nav-link-text ms-1">Payment</span>
        </a>
      </li>
      @endif
      

      
    </ul>
  </div>
</aside>

  @endsection