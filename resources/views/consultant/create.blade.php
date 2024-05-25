@extends('template')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Consultant</h4>
                        <p class="card-description">
                            <a href="{{ route('consultant') }}" class="btn btn-sm btn-primary">Kembali</a>
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
                        <form class="forms-sample" action="{{ route('consultant-store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Nama Asli</label>
                                        <input type="text" name="nama_asli"
                                            class="form-control @error('nama_asli') is-invalid @enderror"
                                            placeholder="Nama Asli...">
                                        @error('nama_asli')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Nama Gelar</label>
                                        <input type="text" name="nama_gelar"
                                            class="form-control @error('nama_gelar') is-invalid @enderror"
                                            placeholder="Nama Gelar...">
                                        @error('nama_gelar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Email</label>
                                        <input type="text" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email...">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">No HP</label>
                                        <input type="text" name="no_hp"
                                            class="form-control @error('no_hp') is-invalid @enderror"
                                            placeholder="No HP...">
                                        @error('no_hp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Email</label>
                                        <input type="text" name="pekerjaan"
                                            class="form-control @error('pekerjaan') is-invalid @enderror"
                                            placeholder="Pekerjaan...">
                                        @error('pekerjaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Keterangan</label>
                                        <textarea name="keterangan" class="form-control" id="editor" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Gambar Background</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="gambar_bg"
                                                class="btn btn-primary @error('gambar_bg') is-invalid @enderror"
                                                id="image" onchange="previewImage(event)">
                                        </div>
                                        <img id="preview-image" src="../assets/img/logo-ct-dark.png" width="100px">
                                        @error('gambar_bg')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Gambar NonBackground</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="gambar_nonbg"
                                                class="btn btn-primary @error('gambar_nonbg') is-invalid @enderror"
                                                id="image" onchange="previewImage2(event)">
                                        </div>
                                        <img id="preview-image2" src="../assets/img/logo-ct-dark.png" width="100px">
                                        @error('gambar_nonbg')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                config.autoParagraph: false
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
    <script>
        function previewImage2(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function() {
                var preview = document.getElementById('preview-image2');
                preview.src = reader.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
