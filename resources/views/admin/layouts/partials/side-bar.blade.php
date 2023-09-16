<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.homepage')}}">
                <i class="bi bi-grid"></i>
                <span>{{ __('Home.Dashboard') }}</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>{{ __('Home.News') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.news.createProcess')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.Create News') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.news.list')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.List News') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End News Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>{{ __('Home.Menu') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="menu-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.menu.processCreate')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.Create Menu') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.menu.list')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.List Menu') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Menus Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-list-task"></i><span>{{ __('Home.Category') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.category.create')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.Create Category') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.category.list')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.List Category') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Category Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#pages-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-fill"></i><span>{{ __('Home.Pages') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pages-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.pages.create')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.Create Pages') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.pages.list')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.List Pages') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Pages Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#banner-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-images"></i><span>{{ __('Home.Banners') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="banner-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.banner.createBannerProcess')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.Create Banner') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.banner.list')}}">
                        <i class="bi bi-circle"></i><span>{{ __('Home.List Banner') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Banners Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.configs.index')}}">
                <i class="bi bi-person"></i>
                <span>{{ __('Home.Profile') }}</span>
            </a>
        </li><!-- End Profile Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('auth.logout')}}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>{{ __('Home.Logout') }}</span>
            </a>
        </li><!-- End Logout Page Nav -->
    </ul>
</aside><!-- End Sidebar-->
