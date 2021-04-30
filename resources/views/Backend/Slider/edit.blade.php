@extends('Backend.app')

@section('style')
    <!-- CodeMirror -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/codemirror/theme/monokai.css') }}">
@endsection

@section('content-header')
    Quản lý slider 🐹
@endsection

@section('script')
    <!-- CodeMirror -->
    <script src="{{ asset('backend/plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('backend/plugins/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('backend/plugins/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('backend/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>

    <script>

        const contentTemplate = document.getElementById('template');

        for (let i = 1; i <= 5; i++) {
            const el = contentTemplate.querySelector(`#template-content-${i}`);
            if (el) {
                const ip = document.querySelector(`#content-${i}`);
                if (ip) {
                    ip.value = el.textContent.trim();
                }
            }
        }

        const ip6 = document.getElementById('content-6');
        const templateEl6 = contentTemplate.querySelector('#template-content-6');

        if (ip6 && templateEl6) {
            ip6.value = templateEl6.getAttribute('href');
        }


        // CodeMirror
        const codeMirror = CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });

        codeMirror.setValue(contentTemplate.innerHTML);

        function handleOnContentInputChange(inputNumber, newContent) {
            console.log('Change ' + inputNumber);
            const element = contentTemplate.querySelector(`#template-content-${inputNumber}`);
            if (!element) return;

            element.textContent = newContent;
            codeMirror.setValue(contentTemplate.innerHTML);
        }

        for (let i = 2; i <= 5; i++) {
            document.getElementById(`content-${i}`).addEventListener('input', function (event) {
                const newContent = event.target.value;
                const templateEl = contentTemplate.querySelector(`#template-content-${i}`);
                templateEl.innerHTML = newContent;

                codeMirror.setValue(contentTemplate.innerHTML);
            })
        }

        document.getElementById('content-1').addEventListener('input', function (event) {
            const newContent = event.target.value;
            const templateEl = contentTemplate.querySelector(`#template-content-1`);
            templateEl.innerHTML = newContent;

            document.getElementById('title').value = newContent;

            codeMirror.setValue(contentTemplate.innerHTML);
        });

        document.getElementById('content-6').addEventListener('input', function (event) {
            const newContent = event.target.value;
            const templateEl = contentTemplate.querySelector(`#template-content-6`);
            templateEl.setAttribute('href', newContent);

            codeMirror.setValue(contentTemplate.innerHTML);
        });

    </script>

    <script>
        function handleOnImageInputChange(input) {
            if (input.files && input.files[0]) {
                $('#image_label').text(input.files[0].name);

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_viewer')
                        .removeAttr('hidden')
                        .attr('src', e.target.result)
                        .width(300);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


    </script>
@endsection

@section('content-body')
    <div hidden
         id="template">
        {!! $slider->content !!}
    </div>

    <form action="{{ route('AdminSlider.update', [$slider]) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin slider</h3>

                        <div class="card-tools">
                            <button type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse"
                                    title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="content-1">Nhập nội dung 1</label>
                            <input type="text"
                                   class="form-control"
                                   value=""
                                   id="content-1"
                            >
                        </div>
                        <div class="form-group">
                            <label for="content-2">Nhập nội dung 2</label>
                            <input type="text"
                                   class="form-control"
                                   value=""
                                   id="content-2"
                            >
                        </div>
                        <div class="form-group">
                            <label for="content-3">Nhập nội dung 3</label>
                            <input type="text"
                                   class="form-control"
                                   value=""
                                   id="content-3"
                            >
                        </div>
                        <div class="form-group">
                            <label for="content-4">Nhập nội dung 4</label>
                            <input type="text"
                                   class="form-control"
                                   value=""
                                   id="content-4"
                            >
                        </div>
                        <div class="form-group">
                            <label for="content-5">Nhập giá khởi điểm</label>
                            <input type="text"
                                   class="form-control"
                                   value=""
                                   id="content-5"
                            >
                        </div>
                        <div class="form-group">
                            <label for="content-6">Nhập liên kết</label>
                            <input type="text"
                                   class="form-control"
                                   value=""
                                   id="content-6"
                            >
                        </div>
                        <input type="hidden"
                               name="title"
                               value="{{ $slider->title }}"
                               class="form-control"
                               id="title"
                        >
                        <div class="form-group">
                            <label for="status">Trạng thái hiển thị *</label>
                            <div class="custom-control custom-radio">
                                <input @if($slider->status == 1) checked
                                       @endif
                                       class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                       type="radio"
                                       id="status-show"
                                       value="1"
                                       name="status">
                                <label for="status-show"
                                       class="custom-control-label">Hiển thị</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input @if($slider->status == 0) checked
                                       @endif
                                       class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                       type="radio"
                                       id="status-hidden"
                                       name="status"
                                       value="0">
                                <label for="status-hidden"
                                       class="custom-control-label">Ẩn</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_input">Ảnh bìa (1920 x 900) *</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input"
                                           name="image"
                                           onchange="handleOnImageInputChange(this);"
                                           id="image_input">
                                    <label class="custom-file-label"
                                           id="image_label"
                                           for="image_input">{{ $slider->image_name }}</label>
                                </div>
                            </div>
                        </div>

                        <img src="{{ asset($slider->image_path) }}"
                             id="image_viewer"
                             width="300"
                             alt=""
                        >
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Mã nguồn tương ứng</h3>

                        <div class="card-tools">
                            <button type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse"
                                    title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="codeMirrorDemo">Nội dung</label>
                            <textarea name="content"
                                      id="codeMirrorDemo"
                                      class="p-3 form-control"
                                      placeholder="Nhập nội dung"
                                      rows="7"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card -->
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <a href="{{ route('AdminSlider.index') }}"
                   class="btn btn-secondary">Quay về</a>
                <input type="submit"
                       value="Lưu thay đổi"
                       class="btn btn-success float-right">
            </div>
        </div>
    </form>

@endsection


