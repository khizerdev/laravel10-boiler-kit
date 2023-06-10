<div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
        <div class="avatar-lg me-4"><img src="https://demo.themesberg.com/volt/assets/img/team/profile-picture-1.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
        <div class="d-block">
            <h2 class="h5 mb-3">Hi, {{auth()->user()->name}}</h2>
            <a href="https://demo.themesberg.com/volt/pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Sign Out
            </a>
        </div>
        </div>
        <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
        </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">

        <li class="nav-item" >
            <a href="/admin/dashboard" class="nav-link d-flex align-items-center">
                <span class="sidebar-icon">
                    <img src="https://demo.themesberg.com/volt/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo"> 
                </span>
                <span class="mt-1 ms-1 sidebar-text">
                    Hi, {{ucfirst(auth()->user()->name)}}
                </span>
            </a>
        </li>

        <li class="nav-item  {{(request()->is('admin/dashboard')) ? 'active' : '' }}">
            <a href="/admin/dashboard" class="nav-link">
                <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                </span>
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>
        
        <!-- users -->
        <li class="nav-item  {{(request()->is('admin/users')) ? 'active' : '' }}">
            <span class="nav-link d-flex justify-content-between align-items-center  {{(request()->is('admin/users')) ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#submenu-app-users"
            :aria-expanded="{{(request()->is('admin/users')) ? 'true' : 'false' }}"
            >
                <span>
                    <span class="sidebar-icon">
                        <i class="fas fa-user me-2"></i>
                    </span>
                    <span class="sidebar-text">Users</span> 
                </span>
                <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </span>
            <div class="multi-level {{(request()->is('admin/users')) ? 'collapse show' : 'collapse' }}" role="list" id="submenu-app-users" aria-expanded="false">
                <ul class="flex-column nav">
                    <li class="nav-item">
                        <a href="{{route('admin.users.index')}}" class="nav-link">
                            <span class="sidebar-text">
                            Manage
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- roles -->
        <li class="nav-item  {{(request()->is('admin/roles')) ? 'active' : '' }}">
            <span class="nav-link d-flex justify-content-between align-items-center  {{(request()->is('admin/roles')) ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#submenu-app-roles"
            :aria-expanded="{{(request()->is('admin/roles')) ? 'true' : 'false' }}"
            >
                <span>
                    <span class="sidebar-icon">
                        <i class="fas fa-briefcase me-2"></i>
                    </span>
                    <span class="sidebar-text">Roles</span> 
                </span>
                <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </span>
            <div class="multi-level {{(request()->is('admin/roles')) ? 'collapse show' : 'collapse' }}" role="list" id="submenu-app-roles" aria-expanded="false">
                <ul class="flex-column nav">
                    <li class="nav-item">
                        <a href="{{route('admin.roles.index')}}" class="nav-link">
                            <span class="sidebar-text">
                            Manage
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- permissions -->
        <li class="nav-item  {{(request()->is('admin/permissions*')) ? 'active' : '' }}">
            <span class="nav-link d-flex justify-content-between align-items-center  {{(request()->is('admin/permissions')) ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#submenu-app-permissions"
            :aria-expanded="{{(request()->is('admin/permissions')) ? 'true' : 'false' }}"
            >
                <span>
                    <span class="sidebar-icon">
                        <i class="fas fa-key me-2"></i>
                    </span>
                    <span class="sidebar-text">Permissions</span> 
                </span>
                <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </span>
            <div class="multi-level {{(request()->is('admin/permissions*')) ? 'collapse show' : 'collapse' }}" role="list" id="submenu-app-permissions" aria-expanded="false">
                <ul class="flex-column nav">
                    <li class="nav-item">
                        <a href="{{route('admin.permissions.index')}}" class="nav-link">
                            <span class="sidebar-text">
                            Manage
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- settings -->
        <li class="nav-item ">
            <span class="nav-link d-flex justify-content-between align-items-center  {{(request()->is('admin/settings*')) ? 'collapsed' : '' }}" data-bs-toggle="collapse" data-bs-target="#submenu-app-settings" 
            aria-expanded="{{(request()->is('admin/settings*')) ? 'true' : 'false' }}"
            >
                <span>
                    <span class="sidebar-icon">
                        <i class="fas fa-cog me-2"></i>
                    </span>
                    <span class="sidebar-text">Setting</span> 
                </span>
                <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </span>
            <div class="multi-level {{(request()->is('admin/settings*')) ? 'collapse show' : 'collapse' }}" role="list" id="submenu-app-settings" aria-expanded="false">
                <ul class="flex-column nav">
                    <li class="nav-item {{(request()->is('admin/settings/site-identity')) ? 'active' : '' }}">

                        <a href="{{ route('admin.settings.site-identity') }}" class="nav-link ">
                            <span class="sidebar-text">
                                Site Identity
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{(request()->is('admin/settings/seo')) ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.seo') }}" class="nav-link ">
                            <span class="sidebar-text">
                                SEO Setting
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{(request()->is('admin/settings/basic')) ? 'active' : '' }}">
                        
                        <a href="{{ route('admin.settings.basic') }}" class="nav-link ">
                            <span class="sidebar-text">
                                Basic Setting
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>


    
    </ul>
</div>