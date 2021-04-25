<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | User Profile</title>

    <!-- Google Font: Source Sans Pro -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}" />
</head>
<body class="hold-transition dark-mode sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('Backend._navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('Backend._main-sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thông tin chi tiết người dùng</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Thông tin chi tiết người dùng</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img
                                        id="avatar-img"
                                        class="profile-user-img img-fluid img-circle"
                                        src="{{ asset($user->avatar_path) }}"
                                        alt="User profile picture"
                                    />
                                </div>

                                <h3 class="profile-username text-center">{{ $user->getFullName() }}</h3>

                                <p class="text-muted text-center">{{ '@'.$user->username }}</p>

                                <!--
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Tên</b> <a class="float-right">{{ $user->first_name }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Họ đệm</b> <a class="float-right">{{ $user->last_name }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                                    </li>
                                </ul>
                                -->

                                <a href="#" id="btn-upload-avatar" class="btn btn-primary btn-block"
                                ><b>Cập nhật ảnh</b></a
                                >
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin tài khoản</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Tên</strong>

                                <p class="text-muted">{{ $user->first_name }}</p>

                                <hr />

                                <strong
                                ><i class="fas fa-map-marker-alt mr-1"></i>
                                    Họ đệm</strong
                                >

                                <p class="text-muted">{{ $user->last_name }}</p>

                                <hr />

                                <strong
                                ><i class="fas fa-pencil-alt mr-1"></i> Email</strong
                                >

                                <p class="text-muted">
                                    {{ $user->email }}
                                </p>

                                <hr />
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#timeline" data-toggle="tab"
                                        >Lịch sử hoạt động</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#settings" data-toggle="tab"
                                        >Chỉnh sửa thông tin tài khoản</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- /.tab-pane -->
                                    <div class="active tab-pane" id="timeline">
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">
                                            <!-- timeline time label -->
                                            <div class="time-label">
                                                <span class="bg-danger"> 10 Feb. 2014 </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-envelope bg-primary"></i>

                                                <div class="timeline-item">
                              <span class="time"
                              ><i class="far fa-clock"></i> 12:05</span
                              >

                                                    <h3 class="timeline-header">
                                                        <a href="#">Support Team</a> sent you an email
                                                    </h3>

                                                    <div class="timeline-body">
                                                        Etsy doostang zoodles disqus groupon greplin
                                                        oooj voxy zoodles, weebly ning heekya handango
                                                        imeem plugg dopplr jibjab, movity jajah plickers
                                                        sifteo edmodo ifttt zimbra. Babblely odeo
                                                        kaboodle quora plaxo ideeli hulu weebly
                                                        balihoo...
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-primary btn-sm"
                                                        >Read more</a
                                                        >
                                                        <a href="#" class="btn btn-danger btn-sm"
                                                        >Delete</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-user bg-info"></i>

                                                <div class="timeline-item">
                              <span class="time"
                              ><i class="far fa-clock"></i> 5 mins ago</span
                              >

                                                    <h3 class="timeline-header border-0">
                                                        <a href="#">Sarah Young</a> accepted your friend
                                                        request
                                                    </h3>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-comments bg-warning"></i>

                                                <div class="timeline-item">
                              <span class="time"
                              ><i class="far fa-clock"></i> 27 mins ago</span
                              >

                                                    <h3 class="timeline-header">
                                                        <a href="#">Jay White</a> commented on your post
                                                    </h3>

                                                    <div class="timeline-body">
                                                        Take me to your leader! Switzerland is small and
                                                        neutral! We are more like Germany, ambitious and
                                                        misunderstood!
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a
                                                            href="#"
                                                            class="btn btn-warning btn-flat btn-sm"
                                                        >View comment</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline time label -->
                                            <div class="time-label">
                                                <span class="bg-success"> 3 Jan. 2014 </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-camera bg-purple"></i>

                                                <div class="timeline-item">
                              <span class="time"
                              ><i class="far fa-clock"></i> 2 days ago</span
                              >

                                                    <h3 class="timeline-header">
                                                        <a href="#">Mina Lee</a> uploaded new photos
                                                    </h3>

                                                    <div class="timeline-body">
                                                        <img
                                                            src="https://placehold.it/150x100"
                                                            alt="..."
                                                        />
                                                        <img
                                                            src="https://placehold.it/150x100"
                                                            alt="..."
                                                        />
                                                        <img
                                                            src="https://placehold.it/150x100"
                                                            alt="..."
                                                        />
                                                        <img
                                                            src="https://placehold.it/150x100"
                                                            alt="..."
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <div>
                                                <i class="far fa-clock bg-gray"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="settings">
                                        <form action="{{ route('AdminUser.update', [$user]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="form-group row">
                                                <label
                                                    for="username"
                                                    class="col-sm-2 col-form-label"
                                                >Tên đăng nhập</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        value="{{ $user->username }}"
                                                        type="text"
                                                        class="form-control"
                                                        id="username"
                                                        disabled
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="first_nane"
                                                    class="col-sm-2 col-form-label"
                                                >Tên</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        value="{{ $user->first_name }}"
                                                        name="first_name"
                                                        type="text"
                                                        class="form-control"
                                                        id="first_nane"
                                                        placeholder="Nhập tên"
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="last_name"
                                                    class="col-sm-2 col-form-label"
                                                >Họ đệm</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        value="{{ $user->last_name }}"
                                                        name="last_name"
                                                        type="text"
                                                        class="form-control"
                                                        id="last_name"
                                                        placeholder="Nhập họ đệm"
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="email"
                                                    class="col-sm-2 col-form-label"
                                                >Email</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        type="email"
                                                        value="{{ $user->email }}"
                                                        class="form-control"
                                                        name="email"
                                                        id="email"
                                                        placeholder="Email"
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="password"
                                                    class="col-sm-2 col-form-label"
                                                >Mật khẩu mới</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        type="password"
                                                        name="password"
                                                        class="form-control"
                                                        id="password"
                                                        placeholder="Nhập mật khẩu"
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="password-confirmation"
                                                    class="col-sm-2 col-form-label"
                                                >Nhập lại mật khẩu</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        type="password"
                                                        name="password-confirmation"
                                                        class="form-control"
                                                        id="password-confirmation"
                                                        placeholder="Nhập lại mật khẩu"
                                                    />
                                                </div>
                                            </div>
                                            <input onchange="handleOnAvatarChange(this)" type="file" class="d-none" name="avatar" id="avatar">
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-warning">
                                                        Cập nhật
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('Backend._main-footer')

    <!-- Control Sidebar -->
    @include('Backend._control-sidebar')
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>

<script>
    $("#btn-upload-avatar").click(function(e){
        e.preventDefault();
        $("#avatar").trigger('click');
    });

    function handleOnAvatarChange(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#avatar-img')
                    .attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>
