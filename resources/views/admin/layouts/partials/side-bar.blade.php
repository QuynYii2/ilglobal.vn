<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.homepage')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>News</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.news.createProcess')}}">
                        <i class="bi bi-circle"></i><span>Thêm mới tin tức</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.news.list')}}">
                        <i class="bi bi-circle"></i><span>Danh sách tin tức</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="menu-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.menu.processCreate')}}">
                        <i class="bi bi-circle"></i><span>Thêm mới menu</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.menu.list')}}">
                        <i class="bi bi-circle"></i><span>Danh sách menu</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-list-task"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.category.create')}}">
                        <i class="bi bi-circle"></i><span>Thêm mới Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.category.list')}}">
                        <i class="bi bi-circle"></i><span>Danh sách Category</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.configs.index')}}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Icons Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#banner-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-images"></i><span>Banners</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="banner-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.banner.createBannerProcess')}}">
                        <i class="bi bi-circle"></i><span>Thêm mới banner</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.banner.list')}}">
                        <i class="bi bi-circle"></i><span>Danh sách banner</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Banners Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('auth.logout')}}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Login Page Nav -->
    </ul>
</aside><!-- End Sidebar-->
