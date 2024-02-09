<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Resto Run</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Rr</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="fas fa-pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Pages</li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-user"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="{{ Request::is('products') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fas fa-cube"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="{{ Request::is('categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <i class="fas fa-server"></i>
                    <span>Categories</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
