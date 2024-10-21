  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard') }}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#event-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Event</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="event-nav" class="nav-content collapse {{ set_active(['event'])}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('event') }}" class="{{ set_active(['event'])}}">
              <i class="bi bi-circle"></i><span>event</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse {{ set_active(['user'])}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('user') }}" class="{{ set_active(['user'])}}">
              <i class="bi bi-circle"></i><span>Users</span>
            </a>
          </li>
        
        </ul>
      </li>  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category-nav" class="nav-content collapse {{ set_active(['category'])}}" data-bs-parent="#sidebar-nav">
        
          <li>
            <a href="{{ route('category') }}" class="{{ set_active(['category'])}}">
              <i class="bi bi-circle"></i><span>category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#feedback-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Feedback</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="feedback-nav" class="nav-content collapse {{ set_active(['feedback'])}}" data-bs-parent="#sidebar-nav">
        
          <li>
            <a href="" class="{{ set_active(['feedback'])}}">
              <i class="bi bi-circle"></i><span>Feedback</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    </ul>

  </aside><!-- End Sidebar-->
