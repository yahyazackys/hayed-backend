@extends('template')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header justify-content-between d-flex mt-2">
                        <h4>Edit Data Consultant</h4>
                        <a
                            href="{{ route('consultant') }}"class="btn btn-sm btn-primary text-xs font-weight-bold">Kembali</a>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('consultant-update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $consultants->id }}">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Nama Asli</label>
                                        <input type="text" name="nama_asli" class="form-control"
                                            value="{{ $consultants->nama_asli }}" placeholder="Nama Asli...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Nama Gelar</label>
                                        <input type="text" name="nama_gelar" class="form-control"
                                            value="{{ $consultants->nama_gelar }}" placeholder="Nama Gelar...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control"
                                            value="{{ $consultants->pekerjaan }}" placeholder="Pekerjaan...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">No HP</label>
                                        <input type="text" name="no_hp" class="form-control"
                                            value="{{ $consultants->no_hp }}" placeholder="No HP...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $consultants->email }}" placeholder="Email...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Keterangan</label>
                                        <textarea name="keterangan" class="form-control" id="editor" cols="30" rows="10">{{ $consultants->keterangan }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Gambar Background</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="gambar_bg" class="btn btn-primary"
                                                value="{{ $consultants->gambar_bg }}" onchange="previewImage(event)">
                                        </div>
                                        <img id="preview-image"
                                            src="{{ asset('consultantBg-images/' . $consultants->gambar_bg) }}"
                                            width="100px" srcset="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Gambar NonBackground</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="gambar_nonbg" class="btn btn-primary"
                                                value="{{ $consultants->gambar_nonbg }}" onchange="previewImage2(event)">
                                        </div>
                                        <img id="preview-image2"
                                            src="{{ asset('consultantNonbg-images/' . $consultants->gambar_nonbg) }}"
                                            width="100px" srcset="">
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
