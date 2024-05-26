@extends('template')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">

                        <h6>News table</h6>
                        <a href="{{ route('new-create') }}"
                            class="btn btn-sm btn-primary text-xs font-weight-bold mt-4">Add</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 mx-4">
                            <table class="table align-items-center mb-0" id="datatables" style="width: 2500px;">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Servis</th>
                                        <th <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Judul</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Konten</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Keterangan Gambar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Inisial Penerbit</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jumlah Tampilan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Berita Hangat</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $new)
                                        <tr>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $loop->index + 1 }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $new->services->servis }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center ">
                                                    {{ $new->judul }}
                                                </h6>
                                            </td>
                                            <td style="width: 600px;">
                                                <h6 style="max-width: 800px; 
                                                  white-space: normal;
                                                  overflow: hidden;
                                                  text-overflow: ellipsis;"
                                                    class="text-secondary font-weight-bold text-xs ">
                                                    <?php echo htmlspecialchars_decode($new->konten); ?>
                                                </h6>
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ asset('new-images/' . $new->gambar) }}" width="150">
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $new->keterangan_gambar }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs ">
                                                    {{ $new->inisial_penerbit }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $new->tanggal }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $new->jumlah_tampilan == '' ? '0' : $new->jumlah_tampilan }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $new->berita_hangat == '0' ? 'No' : 'Yes' }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $new->status == '0' ? 'Unpublish' : 'Publish' }}
                                                </h6>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href=" {{ route('new-edit', $new->id) }}"
                                                    class="btn btn-sm btn-info text-xs font-weight-bold">Edit</a>
                                                <a href="{{ route('new-delete', $new->id) }}"
                                                    onclick="return confirm('Yakin hapus data ini?')"
                                                    class="btn btn-sm btn-danger text-xs font-weight-bold">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
