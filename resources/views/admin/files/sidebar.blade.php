<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rocket Serve Tech</div>
            </a>
            <div class="sidebar-heading">
                Admin DashBoard
            </div>
            <!-- Divider -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone"
                    aria-expanded="true" aria-controls="collapseone">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Orders</span>
                </a>
                <div id="collapseone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Order Log:</h6>
                        <a class="collapse-item" href="{{route('admin.pending')}}">Pending Orders</a>
                        <a class="collapse-item" href="{{route('admin.successful')}}">Successful Orders</a>
                        <a class="collapse-item" href="{{route('admin.completed')}}">Completed Orders</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <hr class="sidebar-divider">
            <!-- Divider -->
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <div class="text-center d-none d-md-inline">
                <a href="" class="btn btn-primary p-2">
                    Logout
                </a>
            </div>

        </ul>
