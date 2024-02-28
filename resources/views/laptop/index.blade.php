@extends('template.default-template')

@section('conten')
    <h2 class="border-bottom border-2 border-success  pb-1 ">Data Laptop</h2>

    <div class="d-flex justify-content-between align-items-center my-3">
        <a href="{{ url('laptop/create') }}" class="btn btn-primary btn-sm">Tambah Laptop</a>
        <form action="{{ url('laptop') }}" method="GET" class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari"
                value="{{ Request::get('cari') }}">
            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>

    <table class="table table-striped table-responsive-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Merek</th>
                <th>Tipe</th>
                <th>Jumlah</th>
                <th>Ket.</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem(); ?>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->merek }}</td>
                    <td>{{ $item->tipe }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->ket }}</td>
                    <td>
                        <a href="{{ url('laptop/' . $item->id) }}" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="Lihat"><i class="bi bi-eye"></i></a>
                        <a href="{{ url('laptop/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="{{ url('laptop/' . $item->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin Ingin Hapus Data?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger" id="delete" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Hapus"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            @endforeach
        </tbody>
    </table>

    {{-- Agar paginasi berfungsi dengan baik saat melakukan pencarian --}}
    {{ $data->withQueryString()->links() }}
@endsection
