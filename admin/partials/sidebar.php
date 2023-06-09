<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Brand Start -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <!-- Brand End -->
    <!-- Divider Start -->
    <hr class="sidebar-divider my-0">
    <!-- Divide End -->
    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($page == 'dashboard'){ echo 'active'; } ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider Start -->
    <hr class="sidebar-divider">
    <!-- Divider End -->
    <!-- Heading Start -->
    <div class="sidebar-heading">
        Page
    </div>
    <!-- Heading End -->
    <!-- Menu Start -->
    <li class="nav-item <?php if ($page == 'home'){ echo 'active'; } ?>">
        <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item <?php if ($page == 'about'){ echo 'active'; } ?>">
        <a class="nav-link" href="about.php">
            <i class="fas fa-fw fa-table"></i>
            <span>About</span>
        </a>
    </li>
    <li class="nav-item <?php if ($page == 'feature'){ echo 'active'; } ?>">
        <a class="nav-link" href="feature.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Feature</span>
        </a>
    </li>
    <li class="nav-item <?php if ($page == 'menu'){ echo 'active'; } ?>">
        <a class="nav-link" href="menu.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Menu</span>
        </a>
    </li>
    <li class="nav-item <?php if ($page == 'team'){ echo 'active'; } ?>">
        <a class="nav-link" href="team.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Team</span>
        </a>
    </li>
    <li class="nav-item <?php if ($page == 'contact'){ echo 'active'; } ?>">
        <a class="nav-link" href="contact.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Contact</span>
        </a>
    </li>
    <!-- Menu End -->
    <!-- Divider Start -->
    <hr class="sidebar-divider">
    <!-- Divider End -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>