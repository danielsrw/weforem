<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/admin/dashboard" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item active">
            <a href="{{ route('nexcode.admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Simple</span>
        </li>
        <li class="menu-item">
            <a href="{{ route('nexcode.admin.slide') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="Analytics">Slides</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('nexcode.admin.client') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Clients</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('nexcode.admin.team') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-baidu"></i>
                <div data-i18n="Analytics">Team</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('nexcode.admin.blog') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-blogger"></i>
                <div data-i18n="Analytics">Blog</div>
            </a>
        </li>
    </ul>
</aside>
