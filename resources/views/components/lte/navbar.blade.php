            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                  </li>
                </ul>
            
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item d-sm-inline-block">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form>
                      </li>
                </ul>
              </nav>
              <!-- /.navbar -->

                          <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                  <img src="{{ asset('images/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                  <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>
            
                <!-- Sidebar -->
                <div class="sidebar">
            
                  <!-- Sidebar Menu -->
                  <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                      <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ $title == 'Dashboard'?'active':'' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                            Dashboard
                          </p>
                        </a>
                      </li>          
                      <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link {{ $title == 'Users'?'active':'' }}">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                            Manage Users
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="forms.html" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                            Forms
                          </p>
                        </a>
                      </li>           
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Top Navigation</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Top Navigation + Sidebar</p>
                            </a>
                          </li>
            
                        </ul>
                      </li>
                    </ul>
                  </nav>
                  <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
              </aside>