<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' :'' }}" href="/dashboard">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/stok*') ? 'active' :'' }}" href="/dashboard/stok">
                  <span data-feather="package"></span>
                  Stok
                </a>
              </li>
              
              <!-- <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="/dashboard" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Stok
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="dashboard/stok"><i class="bi bi-layout-text-window-reverse"></i> Stok Baru</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="dashboard/stok"><i class="bi bi-layout-text-window-reverse"></i> Stok Second</a></li>
                  </ul>
                </li>
              </ul> -->
            
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pelanggan*') ? 'active' :'' }}" href="/dashboard/pelanggan">
                  <span data-feather="users"></span>
                  Pelanggan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/order*') ? 'active' :'' }}" href="/dashboard/order">
                  <span data-feather="tool"></span>
                  Order
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/cash*') ? 'active' :'' }}" href="/dashboard/cash">
                  <span data-feather="dollar-sign"></span>
                  Cashflow
                </a>
              </li>
                <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/supplier') ? 'active' :'' }}" href="#">
                  <span data-feather="shopping-cart"></span>
                  Supplier
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li> -->
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current Month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Monthly
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Yearly
                </a>
              </li>
            </ul>

            @can('admin')
            
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Administrator</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashbord/users*')? 'active' : '' }}" href="/dashboard/users">
                  <span data-feather="shield"></span>
                  My Admin
                </a>
              </li>
            </ul>
            @endcan
            
          </div>
        </nav>