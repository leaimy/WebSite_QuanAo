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
                <img src="{{ asset('images/avatars/avatar3.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nguyễn Thị Hà</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/starfish.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Tổng quan
                        </p>
                    </a>
                </li>

                <li class="nav-header">CỬA HÀNG</li>
                <li class="nav-item">
                    <a href="{{route('AdminWebsite.index')}}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/pink-cosmos.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Quản lý cửa hàng
                        </p>
                    </a>
                </li>

                <li class="nav-header">SẢN PHẨM</li>
                <li class="nav-item">
                    <a href="{{route('AdminCategory.index')}}" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/cold.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Quản lý nhóm sản phẩm
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
                            Quản lý sản phẩm
                        </p>
                    </a>
                </li>

                <li class="nav-header">BÁN HÀNG</li>
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/dolphin.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Quản lý hóa đơn
                            <span class="badge badge-info right">3</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/mushroom.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Quản lý khách hàng
                        </p>
                    </a>
                </li>


                <li class="nav-header">GIAO DIỆN</li>
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/butterfly.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Quản lý cửa hàng
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
                            Quản lý slider
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
                            Quản lý phản hồi
                        </p>
                    </a>
                </li>

                <li class="nav-header">HỆ THỐNG</li>
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/crab.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Quản lý vai trò
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
                            Quản lý người dùng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
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
                    <a href="/admin" class="nav-link">
                        <i class="mx-1">
                            <img src="{{ asset('images/icons/dove.png') }}" width="20"
                                 alt="">
                        </i>
                        <p>
                            Đăng xuất
                        </p>
                    </a>
                </li>

                <li class="nav-header">LẬP TRÌNH VIÊN</li>
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
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
