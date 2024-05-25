@extends('template')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header justify-content-between d-flex mt-2">
                        <h4>Edit Data New</h4>
                        <a href="{{ route('new') }}"class="btn btn-sm btn-primary text-xs font-weight-bold">Kembali</a>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('new-update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $news->id }}">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Servis</label>
                                        <select name="id_servis" class="form-control">
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}"
                                                    @if ($news->id_servis == $service->id) {{ 'selected' }} @endif>
                                                    {{ $service->servis }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Judul</label>
                                        <input type="text" name="judul" class="form-control"
                                            value="{{ $news->judul }}" placeholder="Judul...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Konten</label>
                                        <textarea name="konten" class="form-control" id="editor" cols="30" rows="10">{{ $news->konten }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="gambar" class="btn btn-primary"
                                                value="{{ $news->gambar }}" onchange="previewImage(event)">
                                        </div>
                                        <img id="preview-image" src="{{ asset('new-images/' . $news->gambar) }}"
                                            width="100px" srcset="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Keterangan Gambar</label>
                                        <input type="text" name="keterangan_gambar" class="form-control"
                                            value="{{ $news->keterangan_gambar }}" placeholder="Keterangan Gambar...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Inisial Penerbit</label>
                                        <input type="text" name="inisial_penerbit" class="form-control"
                                            value="{{ $news->inisial_penerbit }}" placeholder="Inisial Penerbit...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control"
                                            value="{{ $news->tanggal }}" placeholder="Tanggal...">
                                    </div>
                                </div>
                                {{-- <div class="col-xs-12 col-sm-12 col-md-12" hidden>
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Jumlah Tampilan</label>
                                        <input type="number" name="jumlah_tampilan" class="form-control"
                                            value="{{ $news->jumlah_tampilan }}" placeholder="jumlah tampilan...">
                                    </div>
                                </div> --}}
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Berita Hangat</label>
                                        <select class="form-control" id="" name="berita_hangat">
                                            <option value="0"
                                                @if ($news->berita_hangat == '0') {{ 'selected' }} @endif>No
                                            </option>
                                            <option value="1"
                                                @if ($news->berita_hangat == '1') {{ 'selected' }} @endif>Yes
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Status</label>
                                        <select class="form-control" id="" name="status">
                                            <option value="0"
                                                @if ($news->status == '0') {{ 'selected' }} @endif>Unpublish
                                            </option>
                                            <option value="1"
                                                @if ($news->status == '1') {{ 'selected' }} @endif>Publish
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
