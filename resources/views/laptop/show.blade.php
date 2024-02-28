@extends('template.default-template')

@section('conten')

<h3 class="mb-3 border-bottom border-2 border-success-subtle">Edit Data</h3>

<form action="{{url('laptop/'.$data->id)}}" method="post">
@csrf
@method('PUT')
  <div class="mb-3 row">
    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{$data->kode_barang}}" disabled >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="merek" class="col-sm-2 col-form-label">Merek</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="merek" name="merek" value="{{$data->merek}}" disabled >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tipe" name="tipe" value="{{$data->tipe}}" disabled >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{$data->jumlah}}" disabled >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ket" name="ket" value="{{$data->ket}}" disabled >
    </div>
  </div>

<div class="d-flex justify-content-end">
  <a href="{{url('laptop/'.$data->id.'/edit')}}" class="btn btn-warning btn-sm me-2 "><i class="bi bi-floppy"></i> Edit</a>
  <a href="{{url('laptop')}}" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Kembali</a>
</div>
  
</form>
@endsection