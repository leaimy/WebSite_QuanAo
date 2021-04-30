<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" target="_blank" class="nav-link">Trang bán hàng</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin" class="nav-link">Tổng quan</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('AdminProduct.index') }}" class="nav-link">Sản phẩm</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin" class="nav-link">Hóa đơn</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('AdminUser.index') }}" class="nav-link">Khách hàng</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('AdminUser.index') }}" class="nav-link">Người dùng</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
