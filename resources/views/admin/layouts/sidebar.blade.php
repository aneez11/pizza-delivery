<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        Online Pizza Delivery
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class='sidebar-title'>General</li>
            <li class="sidebar-item active ">
                <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item ">
                <a href="{{ route('admin.orders') }}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li class="sidebar-item ">
                <a href="{{ route('admin.users') }}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li class='sidebar-title'>System</li>
            <li class="sidebar-item ">
                <a href="{{ route('admin.users') }}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="sidebar-item ">
                <a href="{{ route('admin.users') }}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Staffs</span>
                </a>
            </li>
            <li class="sidebar-item ">
                <a href="{{ route('admin.products') }}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class='sidebar-title'>Records</li>
            <li class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Sales Record</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
