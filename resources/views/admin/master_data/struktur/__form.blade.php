@extends('admin.modal')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="text" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="nama">Struktur</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Presiden dan Wakil Presiden">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="periode">Periode</label>
                <select name="periode_id" id="periode_id" class="form-control">
                    @foreach ($data['periode'] as $data)
                        <option value="{{ $data->id }}">{{ $data->periode }}</option>
                    @endforeach
                </select>
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
