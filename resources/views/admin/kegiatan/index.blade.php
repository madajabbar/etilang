@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/all.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }

    </style>
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>{{ $data['title'] }}</h3>
        </div>
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="input btn btn-outline-primary block" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">
                        Input Data
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Struktur</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                @include('admin.kegiatan.__form')
            </div>
        </div>
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
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
    <script type="text/javascript">
        // Jquery Datatable
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });

            let jquery_datatable = $("#table1").DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                responsive: true,
                ajax: "{{ route('kegiatan.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'judul',
                        name: 'judul'
                    },
                    {
                        data: 'deskripsi',
                        name: 'deskripsi'
                    },
                    {
                        data: 'struktur',
                        name: 'struktur'
                    },
                    {
                        data: 'gambar',
                        name: 'gambar'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },

                ]
            })

        });

        $('body').on('click', '.input', function() {
            $('#exampleModalCenterTitle').html("Add Kegiatan");
            $('#dataForm').trigger("reset");
        })

        function reloadDatatable() {
            $('#table1').DataTable().ajax.reload();
        }

        $('body').on('click', '.deleteProduct', function() {

            var data_id = $(this).data("id");
            var check = confirm("Are You sure want to delete !");
            if (check == true) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('kegiatan.store') }}" + '/' + data_id,
                    success: function(data) {
                        reloadDatatable();
                        Swal.fire({
                            icon: 'warning',
                            title: 'Data berhasil dihapus',
                        })
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            } else {
                swal.fire({
                    icon: 'success',
                    title: 'Dibatalkan'
                })
            }
        });

        $('body').on('click', '.editProduct', function() {
            var data_id = $(this).data('id');
            $.get("{{ route('kegiatan.index') }}" + '/' + data_id + '/edit', function(data) {
                $('#exampleModalCenterTitle').html("Edit Kegiatan");
                $('#saveBtn').val("edit");
                $('#exampleModalCenter').modal('show');
                $('#id').val(data.id);
                $('#judul').val(data.judul);
                $('#deskripsi').val(data.deskripsi);
                $('#periode_id').val(data.periode_id);
            })
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#saveBtn').click(function(e) {
                e.preventDefault();
                $(this).html('Sending..');
                var myform = document.getElementById('dataForm');
                var formData = new FormData(myform);

                $.ajax({
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: "{{ route('kegiatan.store') }}",
                    type: "POST",
                    dataType: 'json',

                    success: function(data) {

                        reloadDatatable();
                        $('#dataForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        $('#saveBtn').html('success');

                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil dimasukan',
                        })
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        Swal.fire({
                            icon: 'error',
                            title: 'Terjadi Error!',
                        })
                        $('#saveBtn').html('Error');
                    }
                });
            });

        });
    </script>
@endsection
