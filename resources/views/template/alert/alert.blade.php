{{-- PESAN SUSKSES --}}
@if (Session::has("success"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get("success")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- PESAN ERROR SAAT SALAH TAMBAH DATA MAHASISWA --}}
@if ($errors -> any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
                    @endforeach
                </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
