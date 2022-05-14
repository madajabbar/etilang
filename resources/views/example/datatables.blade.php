@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/all.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    table.dataTable td{
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
            <h3>{{$data['title']}}</h3>
        </div>
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    Jquery Datatable
                </div>
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Picture</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
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
<script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendors/fontawesome/all.min.js')}}"></script>
<script type="text/javascript">
    // Jquery Datatable
    $(function (){
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

        let jquery_datatable = $("#table1").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('datatables')}}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'first_name', name: 'first_name'},
                {data: 'last_name', name: 'last_name'},
                {data: 'city', name: 'city'},
                {data: 'country', name: 'country'},
                {data: 'company', name: 'company'},
                {data: 'email', name: 'email'},
                {data: 'picture', name: 'picture'},
            ]
        })

    });
</script>
@endsection
