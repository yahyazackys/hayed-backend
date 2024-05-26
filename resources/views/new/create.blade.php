@extends('template')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data New</h4>
                        <p class="card-description">
                            <a href="{{ route('new') }}" class="btn btn-sm btn-primary">Kembali</a>
                        </p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your
                                input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="forms-sample" action="{{ route('new-store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Servis</label>
                                        <select name="id_servis" class="form-control">
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->servis }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Judul</label>
                                        <input type="text" name="judul" class="form-control" placeholder="Judul...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Konten</label>
                                        <textarea name="konten" class="form-control" id="editor" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="gambar" class="btn btn-primary" id="image"
                                                onchange="previewImage(event)">
                                        </div>
                                        <img id="preview-image" src="../assets/img/logo-ct-dark.png" width="100px">
                                        @error('gambar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Keterangan Gambar</label>
                                        <input type="text" name="keterangan_gambar" class="form-control"
                                            placeholder="Keterangan Gambar...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Inisial Penerbit</label>
                                        <input type="text" name="inisial_penerbit" class="form-control"
                                            placeholder="Inisial Penerbit...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" placeholder="Tanggal...">
                                    </div>
                                </div>
                                {{-- <div class="col-xs-12 col-sm-12 col-md-12" hidden>
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Jumlah Tampilan</label>
                                        <input type="number" name="jumlah_tampilan" class="form-control"
                                            placeholder="Jumlah Tampilan...">
                                    </div>
                                </div> --}}
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Berita Hangat</label>
                                        <select class="form-control" id="" name="berita_hangat">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Status</label>
                                        <select class="form-control" id="" name="status">
                                            <option value="0">Unpublish</option>
                                            <option value="1">Publish</option>
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
            .create(document.querySelector('#editor', {
                autoParagraph: false
            }))
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
