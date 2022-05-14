@extends('admin.modal')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Presiden dan Wakil Presiden">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Presiden dan Wakil Presiden">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="struktur_id"></label>
                <select name="struktur_id" id="struktur_id" class="form-control">
                    @foreach ($data['struktur'] as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-line">
                <label for="gambar">Gambar</label>
                 <input type="file" id="gambar" name="gambar" class="form-control" accept="image/png, image/gif, image/jpeg">
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
