<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('images/icons/snowman.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Shop Bạch Tuyết</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset(auth()->user()->avatar_path) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('AdminUser.show', [auth()->user()]) }}" class="d-block">{{ auth()->user()->getFullName() }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('Admin.home') }}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/starfish.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Tổng quan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('AdminCategory.index')}}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/cold.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Nhóm sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('AdminProduct.index')}}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/maple-leaf.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Sản phẩm
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('Order.index') }}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/dolphin.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Bán hàng
                            <span class="badge badge-info right">3</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Admin.home') }}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/mushroom.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Khách hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('AdminRole.index') }}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/crab.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Vai trò
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('AdminUser.index') }}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/rabbit.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Người dùng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('AdminWebsite.index')}}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/pink-cosmos.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Cửa hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('AdminSlider.index')}}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/hamster.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('AdminClientFeedback.index')}}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/kitty.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Nhận xét
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('AdminUser.show', [auth()->user()]) }}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/whale.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Tài khoản của tôi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('auth.logout.logout') }}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/dove.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Đăng xuất
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('Admin.home') }}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/squirrel.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Về chúng tôi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
