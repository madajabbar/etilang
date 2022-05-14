@extends('admin.modal')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="text" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Yusdi Qomarullah">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim" class="form-control" placeholder="H105118">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Mentri Ekonomi Kreatif">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="struktur_id">Bidang</label>
                <select name="struktur_id" id="struktur_id" class="form-control">
                    @foreach ($data['struktur'] as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
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
