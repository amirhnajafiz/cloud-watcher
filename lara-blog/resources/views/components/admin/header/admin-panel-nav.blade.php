<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->routeIs('admin.dash') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dash') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                    </svg>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('login.page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('login.page') }}">
                    Posts
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('login.page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('login.page') }}">
                    Users
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('login.page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('login.page') }}">
                    Tags
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('login.page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('login.page') }}">
                    Categories
                </a>
            </li>
        </ul>
    </nav>
</div>
