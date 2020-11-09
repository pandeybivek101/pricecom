<nav class="pcoded-navbar" pcoded-header-position="relative">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-40" src="{{asset('assets/images/user.png')}}" alt="User-Profile-Image">
                <div class="user-details">
                    <span>John Doe</span>
                    <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                </div>
            </div>
            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div>
        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="none" subitem-border="true">
            <li class=" ">
                <a href="{{route('dashboard')}}" data-i18n="nav.sticky-notes.main">
                    <span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <!--<span class="pcoded-badge label label-danger">HOT</span>-->
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style6">
                <a href="javascript:void(0)" data-i18n="nav.icons.main">
                    <span class="pcoded-micon"><i class="ti-star"></i></span>
                    <span class="pcoded-mtext">Product</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('add-product')}}" data-i18n="nav.icons.font-awesome">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Addproduct</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('view-product')}}" data-i18n="nav.icons.themify">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List Product</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
            
                </ul>
            </li>

            <li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style6">
                <a href="javascript:void(0)" data-i18n="nav.icons.main">
                    <span class="pcoded-micon"><i class="ti-star"></i></span>
                    <span class="pcoded-mtext">Website</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('website-create')}}" data-i18n="nav.icons.font-awesome">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Add Website</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('view-website')}}" data-i18n="nav.icons.themify">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List Website</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
            
                </ul>
            </li>

            <li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style6">
                <a href="javascript:void(0)" data-i18n="nav.icons.main">
                    <span class="pcoded-micon"><i class="ti-star"></i></span>
                    <span class="pcoded-mtext">Event</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('website-create')}}" data-i18n="nav.icons.font-awesome">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Add Website</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('view-website')}}" data-i18n="nav.icons.themify">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List Website</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
            
                </ul>
            </li>
        </ul>
    </div>
</nav>