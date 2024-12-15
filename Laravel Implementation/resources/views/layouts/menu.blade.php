<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt text-green-500"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('consumptions.index') }}" class="nav-link {{ Request::is('consumptions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cogs text-green-500"></i>
        <p>Consumptions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('cows.index') }}" class="nav-link {{ Request::is('cows*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt text-green-500"></i>
        <p>Cows</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('customers.index') }}" class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users text-green-500"></i>
        <p>Customers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employees.index') }}" class="nav-link {{ Request::is('employees*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie text-green-500"></i>
        <p>Employees</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('expenses.index') }}" class="nav-link {{ Request::is('expenses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-wallet text-green-500"></i>
        <p>Expenses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-lock text-green-500"></i>
        <p>Permissions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('productions.index') }}" class="nav-link {{ Request::is('productions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-industry text-green-500"></i>
        <p>Productions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('records.index') }}" class="nav-link {{ Request::is('records*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-alt text-green-500"></i>
        <p>Records</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-shield text-green-500"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('sales.index') }}" class="nav-link {{ Request::is('sales*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-line text-green-500"></i>
        <p>Sales</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('suppliers.index') }}" class="nav-link {{ Request::is('suppliers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-truck-loading text-green-500"></i>
        <p>Suppliers</p>
    </a>
</li>
