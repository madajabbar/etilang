@extends('layouts.admin')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/toastify/toastify.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="{{asset('https://unpkg.com/filepond/dist/filepond.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>{{$data['title']}}</h3>
        </div>
        <form action="{{route('form.store')}}" id="dataForm" name="dataForm"  enctype="multipart/form-data">
            <div class="page-content">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">First Name</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                placeholder="First Name" name="first_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Last Name</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                placeholder="Last Name" name="last_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">City</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City"
                                                name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Country</label>
                                            <input type="text" id="country-floating" class="form-control"
                                                name="country" placeholder="Country" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Company</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="company" placeholder="Company" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Email</label>
                                            <input type="email" id="email-id-column" class="form-control"
                                                name="email" placeholder="Email"required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="file">file</label>
                                            <input type="file" class="image-preview-filepon" name="picture">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" id="saveBtn" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://ahmadsaugi.com">A. Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('js')

    <!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script
    src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script type="text/javascript">
        $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        // register desired plugins...
        FilePond.registerPlugin(
            // preview the image file type...
            FilePondPluginImagePreview,
        );

        // Filepond: Image Preview
        // FilePond.create(document.querySelector('.image-preview-filepond'), {
        //     allowImagePreview: true,
        //     allowImageFilter: false,
        //     allowImageExifOrientation: false,
        //     allowImageCrop: false,
        //     acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        //     fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        //         // Do custom type detection here and return with promise
        //         resolve(type);
        //     })
        // });
        // const inputElement = document.querySelector('input[type="file"]');
            FilePond.setOptions({
                    server: {
                        url: '/upload',
                        process: {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }
                    }
                });

            $('#saveBtn').click(function (e) {
                    e.preventDefault();
                    $(this).html('Sending..');
                    var myform = document.getElementById('dataForm');
                    var formData = new FormData(myform);

                    const pond = FilePond.create( inputElement );
                    $.ajax({
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    url: "{{ route('form.jquery.store') }}",
                    type: "POST",
                    dataType: 'json',

                    success: function (data) {

                        $('#dataForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        $('#saveBtn').html('success');

                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Error');
                    }
                });
            });
        });
    </script>
@endsection
