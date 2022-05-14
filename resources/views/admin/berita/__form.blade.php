@extends('admin.modal')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="judul">judul</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="judul">
            </div>
            <div class="form-line">
                <label for="content">isi</label>
                <textarea class="content form-control" id="content" cols="30" rows="10" name="isi"></textarea>
                {{-- <textarea id="isi" name="isi" id="" cols="30" rows="10"></textarea> --}}
            </div>

            <div class="form-line">
                <label for="tag_id">tag</label>
                <select class="form-control" name="tag_id" id="tag_id">
                    @foreach ($data['tag'] as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-line">
                <label for="gambar">Gambar</label>
                 <input type="file" id="gambar" name="gambar" class="form-control">
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
