 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin Panel </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="{{ route('abouts.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>About Me </span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="{{ route('skills.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Skills </span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="{{ route('educations.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Educations </span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="{{ route('experiences.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Experiences </span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('portfolios.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Portfolio </span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('testimonials.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Testimonial </span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('contacts.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Message </span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>