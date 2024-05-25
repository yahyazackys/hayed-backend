@extends('template')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header justify-content-between d-flex mt-2">
                        <h4>Edit Data Event</h4>
                        <a href="{{ route('event') }}"class="btn btn-sm btn-primary text-xs font-weight-bold">Kembali</a>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('event-update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $events->id }}">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Judul</label>
                                        <input type="text" name="judul" class="form-control"
                                            value="{{ $events->judul }}" placeholder="Judul...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Keterangan</label>
                                        <textarea name="keterangan" class="form-control" id="editor" cols="30" rows="10">{{ $events->keterangan }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="gambar" class="btn btn-primary"
                                                value="{{ $events->gambar }}" onchange="previewImage(event)">
                                        </div>
                                        <img id="preview-image" src="{{ asset('event-images/' . $events->gambar) }}"
                                            width="100px" srcset="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Status</label>
                                        <select class="form-control" id="" name="status">
                                            <option value="0 "
                                                @if ($events->status == '0') {{ 'selected' }} @endif>Publish As
                                                Previous
                                            </option>
                                            <option value="1"
                                                @if ($events->status == '1') {{ 'selected' }} @endif>Publish As Next
                                            </option>
                                            <option value="2"
                                                @if ($events->status == '2') {{ 'selected' }} @endif>Unpublish
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function() {
                var preview = document.getElementById('preview-image');
                preview.src = reader.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
