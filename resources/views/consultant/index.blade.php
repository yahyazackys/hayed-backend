@extends('template')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">

                        <h4>Consultant table</h4>
                        <a href="{{ route('consultant-create') }}"
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
                                            Nama Asli</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Gelar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Pekerjaan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No HP</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Keterangan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar Background</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar NonBackground</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultants as $consultant)
                                        <tr>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $loop->index + 1 }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $consultant->nama_asli }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $consultant->nama_gelar }}
                                                </h6>
                                            </td>
                                            <td style="width: 300px;">
                                                <h6 class="text-secondary font-weight-bold text-xs text-center"
                                                    style="white-space: nowrap;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    max-width: 500px;">
                                                    {{ $consultant->pekerjaan }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $consultant->no_hp }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $consultant->email }}
                                                </h6>
                                            </td>
                                            <td style="width: 600px;">
                                                <h6 style="max-width: 800px; 
                                                  white-space: normal;
                                                  overflow: hidden;
                                                  text-overflow: ellipsis;"
                                                    class="text-secondary font-weight-bold text-xs ">
                                                    <?php echo htmlspecialchars_decode($consultant->keterangan); ?>
                                                </h6>
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ asset('consultantBg-images/' . $consultant->gambar_bg) }}"
                                                    width="150">
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ asset('consultantNonbg-images/' . $consultant->gambar_nonbg) }}"
                                                    width="150">
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href=" {{ route('consultant-edit', $consultant->id) }}"
                                                    class="btn btn-sm btn-info text-xs font-weight-bold">Edit</a>
                                                <a href="{{ route('consultant-delete', $consultant->id) }}"
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
