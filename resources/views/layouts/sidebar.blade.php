<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Custom Menu -->

    <!-- Heading -->
    <div class="sidebar-heading">
        My Custom
    </div>
    <li class="nav-item {{ Request::segment(1) === 'projects' ? 'active' : null }}">
        <a class="nav-link" href="/projects">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Projects</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'invoices' ? 'active' : null }}">
        <a class="nav-link" href="/invoices">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Invoices</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
