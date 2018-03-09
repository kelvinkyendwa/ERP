 <div>
 <nav class="col-md-12 d-none d-md-block bg-dark sidebar-dark">

          <div class="sidebar-sticky">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>DASHBOARD</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <hr>

            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/time') }}">
                  <span data-feather="file"></span>
                  Timesheets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/over') }}">
                  <span data-feather="shopping-cart"></span>
                  Overtime
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/logistics') }}">
                  <span data-feather="users"></span>
                  Logistics
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/leave') }}">
                  <span data-feather="bar-chart-2"></span>
                  Leave Management
                </a>
              </li>
              
            </ul>

           
          </div>
        </nav>
</div>