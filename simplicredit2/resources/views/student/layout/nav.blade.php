<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">SIMPLICREDIT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <!--  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">-->
        </div>
        @if( auth()->check() )
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          <a href="#" class="d-block">{{ auth()->user()->matric_id }}</a>
        </div>
        @endif
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{url('/student/previous')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Previous University <br>
               Information

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/student/application')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                New Application Form

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/student/status')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
            Application Status

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{url('/student/letter')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Application History
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{url('/user/ot')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
             Profile

              </p>
            </a>

          </li>

              </p>
            </a>

          </li>
          <li class="nav-item" >
          <form method="POST" action="{{ route('logout') }}" x-data>


            @csrf

            <i class="nav-icon fas fa-tree"></i>
            <x-jet-dropdown-link href="{{ route('logout') }}"
                     @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </x-jet-dropdown-link>
        </form>

    </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
