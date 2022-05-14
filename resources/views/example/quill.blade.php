@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendors/quill/quill.bubble.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/quill/quill.snow.css')}}">
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Quill Editor</h3>
        </div>
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Full Editor</h4>
                </div>
                <div class="card-body">
                    <p>Block some text to display options in poppovers </p>
                    <div id="full">
                        <p>Hello World!</p>
                        <p>Some initial <strong>bold</strong> text</p>
                        <p><br></p>
                    </div>
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
<script src="{{asset('assets/vendors/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form-editor.js')}}"></script>
@endsection
