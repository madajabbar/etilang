@extends('admin.modal')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="judul">judul</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Yusdi Qomarullah" required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="informasi">informasi</label>
                <input type="text" name="informasi" id="informasi" class="form-control" placeholder="isi dari informasi" required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="file">file (jika ada)</label>
                <input type="file" name="file" id="file" class="form-control" >
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" id="saveBtn" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Save</span>
                </button>
            </div>
    </form>
@endsection
