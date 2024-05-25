@extends('template')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Event table</h4>
                        <a href="{{ route('event-create') }}"
                            class="btn btn-sm btn-primary text-xs font-weight-bold mt-4">Add</a>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 mx-4">
                            <table class="table align-items-center mb-0" id="datatables">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Judul</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Keterangan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    {{ $loop->index + 1 }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class=" text-secondary font-weight-bold text-xs text-center ">
                                                    {{ $event->judul }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 style=" max-width: 600px; 
                                                  white-space: normal;
                                                  overflow: hidden;
                                                  text-overflow: ellipsis;"
                                                    class="text-secondary font-weight-bold text-xs">
                                                    <?php echo htmlspecialchars_decode($event->keterangan); ?>
                                                </h6>
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ asset('event-images/' . $event->gambar) }}" width="150">
                                            </td>
                                            <td>
                                                <h6 class=" text-secondary font-weight-bold text-xs text-center">
                                                    {{ $event->status == '0' ? 'Publish As Previous' : ($event->status == '1' ? 'Publish As Next' : 'Unpublish') }}

                                                </h6>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href=" {{ route('event-edit', $event->id) }}"
                                                    class="btn btn-sm btn-info text-xs font-weight-bold">Edit</a>
                                                <a href="{{ route('event-delete', $event->id) }}"
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
